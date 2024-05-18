<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB;

class SignupController extends Controller
{
    public function Store(Request $request)
    {
       $validate= $request->validate([
        'name'=>'required',
        'email'=>'email|required',
       ]);
        $name=$request->input('name');
        $email=$request->input('email');
        $password=Hash::make($request->input('password'));
        $phone=$request->input('phone');
        $message=$request->input('message');
        $created_at= Date("Y-m-d h:i:s");
        $updated_at= Date("Y-m-d h:i:s");

        $register_store=DB::insert("CALL food_details(?,?,?,?,?,?,?)",array($name,$email,$password,$phone,$message,$created_at,$updated_at));
        if($register_store){
            return redirect(url('login'))->with('success','here we next step');
        }else{
            return redirect(url('signup'))->with('fail', 'sry your details');
        }
    }
}
