<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\checkAge;
use App\Http\Middleware\CountryCheck;
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

// Route::middleware('check1')->group(function(){
//     Route::view('/','home');
//     Route::view('/about','about-us');
//     Route::view('/blog','blog');
//     Route::view('/contact','contact');
// });


// Route::view('/about','about-us')->middleware([checkAge::class,CountryCheck::class]);
// Route::view('/blog','blog')->middleware([checkAge::class,CountryCheck::class]);

// Route::get('/users/{name}', function ($name) {
//     return view('users',['user'=>$name]);
// });

// Route::get('/user/{id}',[UserController::class,'show']);


// Route::get('/users/{name}',[UserController::class,'loadName']);

// Route::get('/users',[UserController::class,'loadForBlade']);
// Route::post('/users',[UserController::class,'getFormData']);

// Route::view('/users','users');
Route::view('/check','login');
Route::view('/noAccess','noAccess');



Route::prefix('/student')->group(function(){
    Route::controller(UserController::class)->group(function(){
        Route::get('/show','showMe');
        Route::get('/add','add');
    });

});


// Route::get('/users',[UserController::class,'users']);
// Route::get('/students',[StudentController::class,'getdata']);


// Route::get('/users',[UserController::class,'getUserDataApi']);


// Route::get('/users',[UserController::class,'queries']);
// Route::get('/users',[UserController::class,'queries_eloquent']);

// Route::get('/users',[UserController::class,'getRouteMethod']);
// Route::post('/users',[UserController::class,'postRouteMethod']);
// Route::put('/users',[UserController::class,'putRouteMethod']);
// Route::patch('/users',[UserController::class,'patchRouteMethod']);
// Route::delete('/users',[UserController::class,'deleteRouteMethod']);
// Route::any('/users',[UserController::class,'any']);
// Route::match(['post','put'],'/users',[UserController::class,'group1']);
// Route::match(['delete','get'],'/users',[UserController::class,'group2']);
// Route::view('/form','users');

// Route::post('/login',[UserController::class,'userlogin']);
// Route::get('/logout',[UserController::class,'logout']);
// Route::view('/login','login');
// Route::view('/profile','profile');

// Route::post('/users',[UserController::class,'flashSession']);
// Route::view('/users','users');

Route::post('/users',[UserController::class,'upload_file']);
Route::view('/users','users');


Route::middleware('Setlang')->group(function(){

    Route::get('/', function () {
        return view('home');
    });

    Route::get('about/',function(){
    return view('about-us');
        
    });



    Route::get('setlang/{lang}',function($lang){
        Session::put('lang', $lang);
        return redirect('/about');
    });


});




Route::post('/student',[StudentController::class,'addstudent']);
Route::view('/student','student');

Route::get('/liststudent',[StudentController::class,'getdata']);

Route::get('/delete/{id}',[StudentController::class,'DeleteStd']);

Route::get('/edit/{id}',[StudentController::class,'edit']);

Route::Put('/edit-student/{id}',[StudentController::class,'editStd']);