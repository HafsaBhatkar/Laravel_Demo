<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::view('home/user/profile','home')->name('hm');

Route::view('home/profile/{name}','home')->name('user');


Route::get('show', [HomeController::class, 'show']);
Route::get('user', [HomeController::class, 'user']);

