<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::view('home/user/profile', 'home');




Route::controller(HomeController::class)->group(function () {
    Route::get('add', 'add');
    Route::get('home/{name}', 'getName');
    Route::get('show', 'show');
});
