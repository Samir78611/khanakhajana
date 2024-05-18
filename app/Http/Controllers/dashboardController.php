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
            return view('dashboard');
        }
    }
}
