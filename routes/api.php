<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


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
