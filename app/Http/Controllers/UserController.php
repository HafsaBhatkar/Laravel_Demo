<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    function addUser(Request $req){
        $req->validate([
            'userName' => 'required |min:3 | max:10',
            'userCity' => 'required | uppercase',
            'userEmail' => 'required | email',
        ],
[
            'userName.required' => 'Username cannot be empty',
            'userName.min' => "Username cannot be less tha 3 characters",
        ]
    );
      echo $req->userName . "<br>";
      echo $req->userCity . "<br>";
      echo $req->userEmail . "<br>";
    }
}
