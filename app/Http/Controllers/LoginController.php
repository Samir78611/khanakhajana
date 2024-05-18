<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB; 
use Auth;

class LoginController extends Controller
{
    public function Index(Request $request) {
        $validateUser= $request->validate ([
            'email'=>'required',
            'password'=>'required',
        ]);
        $email=$request->input('email');
        $password=Hash::make($request->input('password'));
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect('dashboard')->with('success', 'login Successfully');
        }else{
            return redirect('login')->with('fail', 'login failed');
        }
    }
}
