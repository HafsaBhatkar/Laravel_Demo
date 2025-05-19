<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;    
class UserController extends Controller
{
    //

    public function get(){
        return "GET Method";
    }

    public function post(){
        return "POST Method";
    }

    public function put(){
        return "PUT Method";
    }

    public function patch(){
        return "PATCH Method";
    }

    public function delete(){
        return "DELETE Method";
    }
}
