<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\User;
class UserController extends Controller
{
    function show($id)
    {
        return "Hello this is my controller. And this my id: " . $id;
    }

    function loadName($name)
    {
        return view('users', ['user' => $name]);
    }

    function loadForBlade()
    {
        $data = ["Fatima", "Manzar", "Muntazir", "Moatsim"];
        return view('users', ['myName' => $data]);
    }

    function getFormData(Request $req)
    {
        return $req->validate([
            'username' => 'required | min:5 | Uppercase',
            'password' => 'required | min:5'
        ], [
            'username.required' => 'Username empty h'
        ]);
    }


    // function getUserDataApi()
    // {
    //     $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
    //     $response = $response->body();
    //     return view('users', ['apiusers'=> json_decode($response)]);
    // }


    function showMe()
    {
        return "This the student list";
    }


    function add()
    {
        return "Add student details";
    }

    // function users()
    // {
    //     $users = DB::Select('select * from users');

    //     return view('users', ['users' => $users]);
    // }

    function queries(){

        $data = DB::table("users")->get();

        // $data = DB::table("users")->where("id",1)->get();


    //     $data = DB::table("users")->insert([
    //         "name" => "mazhar",
    //         "email"=> "mazhar@gmail.com",
    //         "password"=> "131212",
    //     ]);
    //     if ($data){
    //         return "Data Inserted";
    // }
    // else{
    //     return "Data not Inserted";
    // }


//     $data = DB::table("users")->where('id','3')->update([
//         "name" => "mazhar",
//         "email"=> "mazhar@gmail.com",
//         "password"=> "141414",
//     ]);
//     if ($data){
//         return "Data Updated";
// }
// else{
//     return "Data not Updated";
// }

// $data = DB::table("users")->where('id','3')->delete();

// if ($data){
//         return "Data Deleted";
// }
// else{
//     return "Data not Deleted";
// }


        // return view("users", ["data"=> $data]);



}

    function queries_eloquent(){
        // $response = User::all();
        // $response = User::get();
        // $response = User::where('email','manzar@gmail.com')->get();
        // $response = User::where('email','manzar@gmail.com')->first();
        // $response = User::find(2);
        // $response = User::insert([
        //     'name'=>'muntazir',
        //     'email'=>'muntazir@gmail.com',
        //     'password'=>'2243245',
        // ]);
        // $response = User::where('email','muntazir@gmail.com')->update(['name'=>'muntazir abbas']);

        $response = User::where('email','muntazir@gmail.com')->delete();


        // $response = array($response);
        if($response){
            echo'data deleted';
        }
        else{
            echo'data not deleted';
        }
        // return view("users",['users'=>$response]);
    }

}