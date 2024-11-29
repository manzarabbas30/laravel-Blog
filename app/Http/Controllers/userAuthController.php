<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class userAuthController extends Controller
{
    function Apisignup(Request $request)
    {
        $input= $request->all();
        $input["password"]= bcrypt($input["password"]);
        $user= User::create($input);
        $success["token"]= $user->createToken('MyApp')->plainTextToken;
        $success["name"]=$user->name;
        return ["success"=>true,"result"=>$success,"msg"=> "Token created Successfully"];
    }

    function Apilogin(Request $request)
    {
        $user= User::where('email',$request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)){
            return ["result"=>"login not Found", "success"=>false];
        }
        $success["token"]= $user->createToken('MyApp')->plainTextToken;
        $success["name"]=$user->name;
        return ["success"=>true,"result"=>$success,"msg"=> "Token created Successfully"];
    }
}
