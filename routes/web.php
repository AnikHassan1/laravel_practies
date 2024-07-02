<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Middleware\DemoMiddleware;
use App\Http\Controllers\HomeController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/session/{email}',[DemoController::class,'sessionPut']);
Route::get('/sessionPull',[DemoController::class,'sessionPull']);
Route::get('/sessionForget',[DemoController::class,'sessionForget']);
Route::get('/sessionfluesh',[DemoController::class,'sessionfluesh']);



// Route::get('/home/{key}',[DemoController::class,'home'])->Middleware([DemoMiddleware::class]);
// Route::get('/home2/{key}',[DemoController::class,'home2'])->Middleware([DemoMiddleware::class]);
// Route::get('/home3/{key}',[DemoController::class,'home3'])->Middleware([DemoMiddleware::class]);
// Route::get('/home4/{key}',[DemoController::class,'home4'])->Middleware([DemoMiddleware::class]);

// Route::get('/home2',[DemoController::class,'home2']);


    // Route::get('/home/{key}',[DemoController::class,'home']);
    // Route::get('/home2/{key}',[DemoController::class,'home2']);
    // Route::get('/home3/{key}',[DemoController::class,'home3']);
    // Route::get('/home4/{key}',[DemoController::class,'home4']);

    Route::get('/homes',[HomeController::class,'homes']);