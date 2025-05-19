<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', [UserController::class, 'get']);
Route::post('users', [UserController::class,'post']);
Route::put('users', [UserController::class,'put']);
Route::patch('users', [UserController::class,'patch']);
Route::delete('users', [UserController::class,'delete']);

Route::any('users', [UserController::class,'any']);

Route::match(['put','post'], 'users',[UserController::class,'group1']);
Route::match(['patch','delete'], 'users',[UserController::class,'group2']);


Route::view('form', 'user');