<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        return view('admin.user.edit',compact('user'));
    }


    public function userUpdate( Request $request, User $user)
    {

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
