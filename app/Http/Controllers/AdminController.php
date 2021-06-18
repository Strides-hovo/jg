<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserBlack;
use App\Models\Wallet;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    

    public function index()
    {
        $users = User::get();
        
        return view('admin.index',compact('users'));
    }



    public function createUser()
    {
        return view('admin.user.create');
    }




    public function storeUser(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'messenger' => $request->messenger,
            'messenger_login' => $request->messenger_login,
        ]);
        $user->assignRole('user');

        $message = [
                'email'     => $request->email,
                'subject'   => 'Регистрация в Сайте Jg',
                'name'      => $request->name,
                'password'  => $request->password,
            ];
            $mail = new SendEmail();
            $mail->send($message);

        return redirect()->back()->withSuccess('Ползовотел создан');
    }
 



    public function userEdit(User $user)
    {
        $wallets = Wallet::where('user_id', $user->id)
        ->leftJoin('currency','currency_id','=','currency.id')
        ->select('wallets.*','currency.cod')
        ->get();
        // debugs($wallets);
        return view('admin.user.edit',compact('user','wallets'));
    }


    public function userUpdate( Request $request, User $user)
    {

        if(  $request->ban !== null ){
            $userBlack = $user->toArray();
            $userBlack['password'] = $user->password;
            UserBlack::create( $userBlack );
            $user->delete();
            return redirect()->back()->withSuccess('Ползовотель заблокирован');
        }
        
        $user->email = $request->email ?? $user->email;
        $user->password = $request->password ?? $user->password;
        $user->save();

        $wallets = Wallet::where('user_id', $user->id)
        ->leftJoin('currency','currency_id','=','currency.id')
        ->select('wallets.*','currency.cod')
        ->get();


        
        $btc = Wallet::where('currency_id',5)->first()->money;
        $eth = Wallet::where('currency_id',6)->first()->money;




        
        Wallet::updateOrInsert(
            ['user_id'       => $user->id, 'currency_id'  => 5],
            ['user_id'       => $user->id, 'currency_id'  => 5,
             'created_at'    => date('Y-m-d H:i:s'),
              'money'         => $request->btc ? $request->btc : $btc
            ]
        );

        Wallet::updateOrInsert(
            ['user_id'       => $user->id, 'currency_id'  => 6],
            ['user_id'       => $user->id, 'currency_id'  => 6,
             'created_at'    => date('Y-m-d H:i:s'),
              'money'         => $request->eth ? $request->eth : $eth
            ]
        );
        

        return redirect()->back()->withSuccess('Данние обновлени');
    }


    public function userDestroy(User $user)
    {
        $user->delete();
        return redirect()->back()->withSuccess('Ползовотел удален');
    }




    public function userHistory()
    {
        $users = User::get();
        return view('admin.user.history',compact('users'));
    }











}