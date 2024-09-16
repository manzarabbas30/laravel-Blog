<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    function getdata(){
        $stdData = Student::all();
        return view("student",["std"=>$stdData]);
    }
}