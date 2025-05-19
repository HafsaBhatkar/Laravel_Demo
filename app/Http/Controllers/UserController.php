<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function login(Request $req){
        $req->session()->put("user", $req->input("name"));
        return redirect("profile");
    }

    function logout(){
        session()->forget("user");
        return redirect("profile");
    }

    function profile(){
        return view("profile");
    }
}
