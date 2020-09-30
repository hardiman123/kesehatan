<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function masuk()
    {
        return view('auths.masuk');
    }
    public function postlogin(Request $request)
    {
       if(Auth::attempt($request->only('email','password'))){
           return redirect('/start');

       }
       return redirect('/masuk');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/masuk');
    }
}
