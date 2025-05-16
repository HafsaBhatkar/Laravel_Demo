<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::view('user-form', 'user-form');
Route::post('user-form', [UserController::class,'addUser']);


