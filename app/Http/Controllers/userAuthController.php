<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userAuthController extends Controller
{
    function Apisignup(Request $request)
    {
        $input= $request->all();
        $input["password"]= bcrypt($input["password"]);
        $user= User::create($input);
        $success["token"]= $user->createToken('MyApp')->plainTextToken;
        $user["name"]=$user->name;
        return ["success"=>true,"result"=>$success,"msg"=> "Token created Successfully"];
    }

    function Apilogin(Request $request)
    {
        return 'Some code';
    }
}
