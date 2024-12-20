<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use Illuminate\Support\Facades\Blade;

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

    // function queries_eloquent(){
    //     // $response = User::all();
    //     // $response = User::get();
    //     // $response = User::where('email','manzar@gmail.com')->get();
    //     // $response = User::where('email','manzar@gmail.com')->first();
    //     // $response = User::find(2);
    //     // $response = User::insert([
    //     //     'name'=>'muntazir',
    //     //     'email'=>'muntazir@gmail.com',
    //     //     'password'=>'2243245',
    //     // ]);
    //     // $response = User::where('email','muntazir@gmail.com')->update(['name'=>'muntazir abbas']);

    //     $response = User::where('email','muntazir@gmail.com')->delete();


    //     // $response = array($response);
    //     if($response){
    //         echo'data deleted';
    //     }
    //     else{
    //         echo'data not deleted';
    //     }
    //     // return view("users",['users'=>$response]);
    // }
    function getRouteMethod()
    {
        return 'get route method';
    }


    function postRouteMethod()
    {
        return 'post route method';
    }
    function putRouteMethod()
    {
        return 'put route method';
    }
    function patchRouteMethod()
    {
        return 'patch route method';
    }
    function deleteRouteMethod()
    {
        return 'delete route method';
    }

    function any()
    {
        return 'any route method';
    }

    function group1()
    {
        return 'group1 route methods';
    }
    function group2()
    {
        return 'group2 route methods';
    }



    function login(Request $request){
        echo $request->method().'<br><br>';
        echo $request->url().'<br><br>';
        echo $request->path().'<br><br>';
        echo $request->ip().'<br><br>';
        echo $request->isMethod('post').'<br><br>';
        echo $request->is('user').'<br><br>';
        echo $request->input('name').'<br><br>';
        echo $request->name.'<br><br>';
        print_r($request->input()) .'<br><br>';
        print_r($request->collect()) .'<br><br>';
    }


    function userlogin(Request $request){
        $request->session()->put('username', $request->input('username'));
        $request->session()->put('allData', $request->input());
        // echo session('username');
        return redirect('profile');
    }

    function logout(Request $request){
        $request->session()->pull('username');
        return redirect('profile');

    }


    function flashSession(Request $request){
        $request->session()->flash('message', 'User Data Added Successfully');
        $request->session()->flash('name', 'Manzar');

        // echo session('username');
        return redirect('users');
    }


    function upload_file(Request $request){
        // $path=$request->file('image')->store('public');
        $path=$request->file('image')->storeAs('public','houseroof.jpg');
        $filenameArray=explode('/', $path);
        $filename=$filenameArray[1];
        // echo $filename;
        // echo session('username');
        return view('users',['path' => $filename]);
    }


    function inlineblade(){
        $product_total="20";
        return Blade::render('No of Products: {{$total}}',['total'=>$product_total]);
    }
}



