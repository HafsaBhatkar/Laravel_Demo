<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //

    function upload(Request $req){
    //    $path = $req->file('file')->store('uploads', 'public');
    //    $filenameArray = explode('/', $path);

        $path = $req->file("file")->storeAs("uploads", "dummy1.png", "public");
        $filenameArray = explode('/', $path);

       $filename = $filenameArray[1];
       return view('welcome',['path'=> $filename]);
       
    }
}
