<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about-us');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('user/{id}',[UserController::class,'show']);

