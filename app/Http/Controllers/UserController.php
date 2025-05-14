<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rules\Exists;

class UserController extends Controller
{
    //

    function userAbout($name){
        return view('about', ['user' => $name]);
    }

    function userHome(){
        return view('home');
    }

    function adminLogin(){
        return view('admin.login');
    }

    // To check if a View exists
    function adminExists(){
        // if(view :: exists('signup.login'))
        if(view :: exists('admin.login')){
            return view('admin.login');
        }
        echo "<h1>Not Found<h1>";
    }
}
