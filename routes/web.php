<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('auth.login');
});

//Crud de Marcas
Route::get('/marcas/index',[MarcaController::class,'index'])->name('marcas.index');
Route::get('/marcas/create',[MarcaController::class,'create'])->name('marcas.create');
Route::post('/marcas/store',[MarcaController::class,'store'])->name('marcas.store');
Route::get('/marcas/edit/{id}',[MarcaController::class,'edit'])->name('marcas.edit');
Route::put('/marcas/update/{id}',[MarcaController::class,'update'])->name('marcas.update');
Route::delete('/marcas/delete/{id}',[MarcaController::class,'destroy'])->name('marcas.delete');

//crud producto
Route::get('/productos/index',[ProductoController::class,'index'])->name('productos.index');
Route::get('/productos/create',[ProductoController::class,'create'])->name('productos.create');
Route::post('/productos/store',[ProductoController::class,'store'])->name('productos.store');
Route::get('/productos/edit/{id}',[ProductoController::class,'edit'])->name('productos.edit');
Route::put('/productos/update/{id}',[ProductoController::class,'update'])->name('productos.update');
Route::delete('/productos/delete/{id}',[ProductoController::class,'destroy'])->name('productos.delete');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
