<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('login', 'login');
Route::get('profile', [UserController::class,'profile']);

Route::post('login', [UserController::class,'login']);
Route::get('logout', [UserController::class,'logout']);
