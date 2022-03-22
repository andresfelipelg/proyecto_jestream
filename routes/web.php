<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ReclamoController;

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

//crud de reclamacion
Route::get('/reclamos/index',[ReclamoController::class,'index'])->name('reclamos.index');
Route::get('/reclamos/create',[ReclamoController::class,'create'])->name('reclamos.create');
Route::post('/reclamos/store',[ReclamoController::class,'store'])->name('reclamos.store');
Route::get('/reclamos/edit/{id}',[ReclamoController::class,'edit'])->name('reclamos.edit');
Route::put('/reclamos/update/{id}',[ReclamoController::class,'update'])->name('reclamos.update');
Route::delete('/reclamos/delete/{id}',[ReclamoController::class,'destroy'])->name('reclamos.delete');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
