<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;


<<<<<<< HEAD
Route::get('/' , [HomeController::class,'index']);
=======
Route::get('' , [HomeController::class,'index']);
Route::get('/register',[HomeController::class],'register');
>>>>>>> 6478cc03a81a5d4f62ba15a0d93223beef18f3fe
