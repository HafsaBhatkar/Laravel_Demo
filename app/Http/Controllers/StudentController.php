<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    function add(Request $req){
        $student = new Student();
        $student->name = $req->name;
        $student->email = $req->email;
        $student->phone = $req->phone;

        $student->save();

        if($student){
            echo "New student added";
        }
        else{
            die("ERROR");
        }
    }

    function read(Request $req){
        // $students = Student::paginate(1);
        $students=Student::all();
        return view('read-student',['students'=> $students]);
    }

    function delete($id){
        // $isDeleted = Student::where('id', '=',$id)->delete();
        // OR
        $isDeleted = Student::destroy($id);

        if($isDeleted){
            return redirect('read-student');
        }
    }

    function edit($id){
        // $student = Student::all()->where('id', '=',$id);
        // OR
        $student = Student::find($id);
        return view('edit-student',['students'=> $student]);
    }

    function editStudent(Request $req, $id){
        // $student = new Student();
        // $student->name = $req->name;
        // $student->email = $req->email;
        // $student->phone = $req->phone;
        // $student->where('id', '=', $id)->update([
        //     'name'=> $student->name,
        //     'email'=> $student->email, 
        //     'phone'=> $student->phone
        // ]);
        // if($student){
        //    return  redirect('read-student');
        // }

        // OR

        $student = Student::find( $id );
        $student->name = $req->name;
        $student->email = $req->email;
        $student->phone = $req->phone;
        if($student->save()){
            return redirect('read-student');
        }

    }

    function search(Request $req){
        $val = $req->value;
        // $result = Student::where('name', 'like', "%$val%")->get();
        $result = Student::where('name', 'like','%'.$val.'%')
                    ->orWhere('email','like','%'.$val.'%')
                    ->orWhere('phone','like','%'.$val.'%')
                    ->get();
        return view('read-student',['students'=> $result]);
    }

    function deleteMultiple(Request $req){
        return $req->input['ids'];
    }
}
