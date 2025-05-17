<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function add(){
        return "Add Student";
    }

    function getName($name){
        return view("home",["name"=>$name]);
    }

    function show(){
        return "Student List";
    }
}
