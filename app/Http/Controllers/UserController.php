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
}
