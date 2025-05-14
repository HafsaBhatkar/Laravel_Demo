<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route :: view('/index', 'index');

Route :: get('/about/{name}', function($name){
    // echo $name;
    // return view('about');
    return view('about', ['name' => $name]);
});

// Redirecting
Route :: redirect('/about/', '/index');

Route ::get ('/user', [UserController :: class, 'getUsers']);
Route :: get('/aboutUser', [UserController :: class, 'aboutUsers']);
Route :: get('/getUserName/{name}', [UserController :: class, 'getUserName']);

Route :: get('/adminLogin/{name}', [UserController :: class,'adminLogin']);