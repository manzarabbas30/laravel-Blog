<?php

namespace App\Http\Controllers;
use App\Models\image;

use Illuminate\Http\Request;

class imageController extends Controller
{
    function addimage(Request $request){
        $path=$request->file('image')->store('public');
        $filenameArray=explode('/', $path);
        $filename=$filenameArray[1];

        $image= new Image();

        $image->path= $filename;
        if($image->save()){
            return redirect('/images');
        }
        // return view('users',['path' => $filename]);
    }
    function listimages(){
        $images= Image::all();
        return view('images',['images' => $images]);
    }
}



