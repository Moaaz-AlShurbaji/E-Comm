<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\User;
class UserController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where(["Email"=>$request->email])->first();
        if(!$user || !Hash::check($request->password,$user->password))
        {
            return "Email or Password is not correct";
        }
        else
        {
            $request->session()->put('user',$user);
            $user -> ip = $request->getClientIp();
            return redirect('/');
        }
        return $user;
    }

    public function logout()
    {
        Session::forget('user');
        return redirect('/');
    }

    public function registerPage()
    {
        return view('register');
    }

    public function registerUser(Request $request)
    {
        //return $request->input();
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $request->session()->put('user',$user);
        return redirect('/');
    }
}
