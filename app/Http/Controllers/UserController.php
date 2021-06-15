<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserBlack;
use App\Models\Wallet;
use App\Models\WalletInfo;
use App\Notifications\Telegram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;


class UserController extends Controller
{


   

   


    public function index()
    {
        return view('user.index');
    }



    public function createDeposit()
    {
        return view('user.deposits.create');
    }




    public function deposits()
    {
        return view('user.deposits.index');
    }







    public function history()
    {
        return view('user.history');
    }








    public function partners()
    {
        return view('user.partners');
    }






    public function transfer()
    {
        return view('user.finances.transfer');
    }






    public function transferOut()
    {
        return view('user.finances.transfer-out');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * show id from all wallets
     */
    public function wallets()
    {
        $wallet_info = WalletInfo::where('user_id',Auth::user()->id)->first();

        return view('user.finances.wallets',compact('wallet_info'));
    }


    public function walletUpdate(Request $request, WalletInfo $wallet_info)
    {
        $wallet_info->user_id = Auth::user()->id;
        $wallet_info->PerfectMoney_USD = $request->PerfectMoney_USD;
        $wallet_info->PerfectMoney_EUR = $request->PerfectMoney_EUR;
        $wallet_info->eth = $request->eth;
        $wallet_info->Tether = $request->Tether;
        $wallet_info->btc = $request->btc;
        $wallet_info->save();
        return redirect()->back()->withSuccess('Данние успешно сохронилис');
    }



    public function transferInsert()
    {
        return view('user.finances.insert');
    } 





 

    public function create(Request $request)
    {
        $messages = [
            'name.required' => 'Имя Обязательное поле',
            'messenger.required' => 'Месенджер Обязательное поле',
            'messenger_login.required' => 'Логин Месенджера Обязательное поле',
            'email.required' => 'Почта Обязательное поле',
            'email.email' => 'поле почта должно быть как емаил',
            'email.unique' => 'Такая почта уже сушествует',
            'accept.required' => 'Подтвердите правилами и условиями',
        ];

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email'.$request->id,
            'messenger' => 'required',
            'messenger_login' => 'required',
            'accept' => 'required'
        ], $messages);

        $id = mt_rand(1,99);
        $details = [
            'id' => $id,
            'email' => str_replace('_', '\\_', $request->email),
            'name' => $request->name,
            'messenger' => $request->messenger,
            'messenger_login' => $request->messenger_login,
        ];
        
//        Notification::route('telegram', '1424323861')
        Notification::route('telegram', '-1001227774906')
            ->notify(new Telegram($details));

        $sessUser = [
            'id' => $id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => random_str(8),
            'messenger' => $request->messenger,
            'messenger_login' => $request->messenger_login,
        ];
        session()->push('userTelegram',$sessUser);
        
        return redirect()->back();
    }



    public function telegramStatus(Request $request){

        $users = session()->pull('userTelegram',[]);
        $telegram = [];
        foreach ($users as $k => $item){
            if ($item['id'] == $request->id ){
                $telegram = $item;
                unset($users[$k]);
            }
        }
        session()->put('userTelegram', $users);
        if ($telegram){
            if ($request->status == 'ok'){
                $user = User::create([
                    'name' => $telegram['name'],
                    'email' => $telegram['email'],
                    'password' => Hash::make($telegram['password']),
                    'messenger' => $telegram['messenger'],
                    'messenger_login' => $telegram['messenger_login'],
                ]);
                $user->assignRole('user');

                $wallet = new Wallet;
                $wallet->user_id = $user->id;
                $wallet->save();


                $message = [
                    'email' => $telegram['email'],
                    'subject' => 'Регистрация в Сайте Jg',
                    'name' => $telegram['name'],
                    'password' => $telegram['password']
                ];
                $mail = new SendEmail();
                $mail->send($message);
            }
            elseif ($request->status == 'no'){
                DB::table('user_blacks')
                    ->insert([
                        'name' => $telegram['name'],
                        'email' => $telegram['email'],
                        'password' => $telegram['password'],
                        'messenger' => $telegram['messenger'],
                        'messenger_login' => $telegram['messenger_login'],
                    ]);
            }
        }
        return redirect()->route('index');
    }





    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
