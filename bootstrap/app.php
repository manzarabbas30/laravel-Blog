<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\checkAge;
use App\Http\Middleware\CountryCheck;
use App\Http\Middleware\Setlang;
  
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // $middleware->appendToGroup('check1' ,[checkAge::class,CountryCheck::class]);
        $middleware->appendToGroup('Setlang' ,Setlang::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
