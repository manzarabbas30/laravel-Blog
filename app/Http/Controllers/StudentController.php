<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;
class StudentController extends Controller
{
    function getdata(){
        $stdData = Student::all();
        return view("student",["std"=>$stdData]);
    }

    
    function addstudent(Request $request){
        $student = new Student();
        $student->Name = $request->name;
        $student->Email = $request->email;
        $student->Batch = $request->batch;
        $student->save();
        if ($student){
            return "Record Added!";
        }
        else {
            return "Record Not Added!";
        }
  }
}