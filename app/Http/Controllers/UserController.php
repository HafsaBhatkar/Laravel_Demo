<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Laravel\Prompts\alert;
use Illuminate\Support\Facades\view;

class UserController extends Controller
{
    //
    public function userHome(){
        $name = "Uzma";
        $users = ['Akif', 'Uzma', 'Sadiya'];
        return view("home", ["name"=> $name, "users"=> $users]);
    }

    public function getAbout($data){
        return view("about", ["data" => $data]);
    }

}
