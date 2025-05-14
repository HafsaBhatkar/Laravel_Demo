<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Static View
Route :: get('/home', function(){
    return view('home');
});
Route :: view ('/admin', 'admin.login');

Route :: get('/about-static/{name}', function($name){
    return view('about', ['user' => $name]);
});


// Calling view using controller
Route :: get('/about/{name}', [UserController::class,'userAbout']);

Route :: get('/home', [UserController :: class, 'userHome']);

Route :: get('/adminLogin', [UserController :: class, 'adminLogin']);

Route :: get ('/adminExists', [UserController::class,'adminExists']);