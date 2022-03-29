<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;


Route::get('/' , [HomeController::class,'index']);
//Route::post('/register' , [HomeController::class,'register'])->name('register');
