<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\resourceController;
use App\Http\Controllers\userAuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function () {
    return ["name"=>"manzar","Job"=>"Web developer"];
});

Route::get('/list-student',[StudentController::class,'listStudentApi']);

Route::post('/add-student',[StudentController::class,'addStudentApi']);
// {
//     "name":"saleem2 Abbas",
//     "email":"saleem2@gmail.com",
//     "batch":"22"
//   }


Route::put('/update-student',[StudentController::class,'updateStudentApi']);
// {
//     "id":"30",
//      "name":"Ali Abbas",
//      "email":"ali@gmail.com",
//      "batch":"212"
//   }

Route::delete('/delete-student/{id}',[StudentController::class,'deleteStudentApi']);


Route::get('/search-student/{key}',[StudentController::class,'searchStudentApi']);

Route::resource('member',resourceController::class);


Route::post('/signup',[userAuthController::class,'Apisignup']);

Route::post('/login',[userAuthController::class,'Apilogin']);
