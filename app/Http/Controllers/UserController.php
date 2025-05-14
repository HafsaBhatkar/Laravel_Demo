<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUsers(){
        return view("user");
        // return "Hafsa Bhatkar";
    }

    function aboutUsers(){
        return "Hello this is info about the users";
    }

    function getuserName($name){
        // return "Hello this is " . $name;
        return view("getUser", ["name" => $name]);
    }

    function adminLogin($name){
        return view("admin.login", ["name"=> $name]);
    }
}
