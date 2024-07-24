<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});


// Route::view('/users/profile/home','home')->name('hm');

Route::get('/about', function () {
    return view('about-us');
});
Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});


// Route::view('users','/users');
// Route::get('/users/{name}', function ($name) {
//     return view('users',['user'=>$name]);
// });

Route::get('/user/{id}',[UserController::class,'show']);


Route::get('/users/{name}',[UserController::class,'loadName']);

// Route::get('/users',[UserController::class,'loadForBlade']);
Route::post('/users',[UserController::class,'getFormData']);
Route::view('/users','users');
Route::view('/check','login');
Route::view('/noAccess','noAccess');



Route::prefix('/student')->group(function(){
    Route::controller(UserController::class)->group(function(){
        Route::get('/show','showMe');
        Route::get('/add','add');
    });

});


