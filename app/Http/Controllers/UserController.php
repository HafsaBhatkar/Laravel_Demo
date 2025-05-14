<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function userHome(){
        $name = "Uzma";
        $users = ['Akif', 'Uzma', 'Sadiya'];
        return view("home", ["name"=> $name, "users"=> $users]);
    }
}
