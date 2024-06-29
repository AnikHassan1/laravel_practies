<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Middleware\DemoMiddleware;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/session/{email}',[DemoController::class,'sessionPut']);
Route::get('/sessionPull',[DemoController::class,'sessionPull']);
Route::get('/sessionForget',[DemoController::class,'sessionForget']);
Route::get('/sessionfluesh',[DemoController::class,'sessionfluesh']);



Route::get('/home/{key}',[DemoController::class,'home'])->Middleware([DemoMiddleware::class]);
Route::get('/home2',[DemoController::class,'home2']);