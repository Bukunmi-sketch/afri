<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Validated;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct(){
        $this->middleware('guest')->except('logout');
    }
/*
    public function login(Request $request){
        $credentials=$request->validate([
            "email"=>"",
            "password"=>"",
        ]);

        //if(Auth::attempt(['email' => $email, 'password' => $password]))
        if(Auth::attempt($credentials)){
                $request->session()->regenerate();
        }
        
    } */
}
