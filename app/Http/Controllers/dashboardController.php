<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Hash;

class dashboardController extends Controller
{
    public function details () {
        if(Auth::check()){
            $food_data=DB::select("CALL get_food_details()");
            return view('dashboard',compact('food_data'));
        }
    }

    public function foodOrder(Request $request) {
        $validateData=$request->validate ([
            'food_name'=>'required',
            'image'=>'required',
            'price'=>'required',
        ]);

        $food_name=$request->input('food_name');
        $image=$request->file('image');
        $image_new_name=time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('foods'),$image_new_name);
        $price=$request->input('price');
        $quality=$request->input('quality');
        $feedback=$request->input('feedback');

        $created_at= Date("Y-m-d h:i:s");
        $updated_at= Date("Y-m-d h:i:s");

        $food_order=DB::insert("CALL food_order(?,?,?,?,?,?,?)", array($food_name,$image_new_name,$price,$quality,$feedback,$created_at,$updated_at));
        if($food_order) {
            return redirect(url('dashboard'))->with('success','You have to Successfully add food details');
        }else{
            return redirect(url('dashboard'))->with('fail','You have to Successfully add food details');
        }
    }
}
