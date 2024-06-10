<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view("login");
    }

    public function register()
    {
        return view("register");
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            "email"=>"required|email",
            "password" => "required"
        ]);

        $user = $request->only("email", "password");

        if(Auth::attempt($user)){
            if(Auth::user()->level == '1'){
                return redirect('/');
            }else{
                return redirect('/admin');
            }
        }else{
            return redirect()->back();
        }

    }
    public function registerPost(Request $request)
    {
        $request->validate([
            "name"=>"required",
            "email"=>"required|email|unique:users",
            "password" => "required"
        ]);

        $create = User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>$request->password,
            "level"=>'1',
        ]);

        $user = $request->only("email", "password");

        if(Auth::attempt($user)){
            return redirect('/');
        }else{
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
