<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\dashboardController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('login', function() {
    return view('login');
});
Route::post('/registration',[SignupController::class,'Store']);
Route::post('login_user',[LoginController::class,'Index']);

Route::get('dashboard',[dashboardController::class,'details']);
Route::post('food_details',[dashboardController::class,'foodOrder']);
Route::get('edit_food/{id}',[dashboardController::class,'editFood']);
Route::get('delete_food/{id}',[dashboardController::class,'deletefood']);
Route::get('logout_user',[dashboardController::class,'logout']);

