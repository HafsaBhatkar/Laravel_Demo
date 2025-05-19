<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;    
class UserController extends Controller
{
    //

    function login(Request $req){
        // echo "<pre>";
        echo $req->path();
        echo $req->url();
        echo $req->ip();

        // All input fields
        print_r($req->all());
        // OR
        print_r($req->collect());

        // echo "</pre>";
    }

}
