<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function show($id){
        return "Hello this is my controller. And this my id: ".$id;
    }

    function loadName($name)
    {
        return view('users', ['user'=>$name]);
    } 

    function loadForBlade()
    {
        $data = ["Fatima","Manzar","Muntazir","Moatsim"];
        return view('users', ['myName'=>$data]);
    } 

    function getFormData(Request $req){
        return $req->validate([
             'username' => 'required | min:5 | Uppercase' ,
            'password' => 'required | min:5'
        ],[
            'username.required' => 'Username empty h'
        ]);
    }


    function showMe(){
        return "This the student list";
    }

    
    function add(){
        return "Add student details";
    }
}
