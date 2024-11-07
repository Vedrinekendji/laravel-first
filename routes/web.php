<?php

use App\Http\Controllers\testcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test',[testcontroller::class,'method1']);

Route::get('/exemple', [testcontroller::class,'exemple']

);
