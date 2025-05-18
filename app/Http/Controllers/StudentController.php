<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class StudentController extends Controller
{
    //
    function getStudents(){
        $test = new \App\Models\Student;
        echo $test->testFunc();
        $students = \App\Models\Student::all();
        return view('students',['data'=>$students]);
    }
}
