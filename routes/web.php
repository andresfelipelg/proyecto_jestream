<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ReclamoController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;

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

Route::get('/register', function () {
    return view('auth.register');
});

//Crud de Marcas
Route::get('/marcas/index',[MarcaController::class,'index'])->name('marcas.index');
Route::get('/marcas/create',[MarcaController::class,'create'])->name('marcas.create');
Route::post('/marcas/store',[MarcaController::class,'store'])->name('marcas.store');
Route::get('/marcas/registro',[MarcaController::class,'registro'])->name('marcas.registro');
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
Route::get('/reclamacion/index',[ReclamoController::class,'index'])->name('reclamacion.index');
Route::get('/reclamacion/create',[ReclamoController::class,'create'])->name('reclamacion.create');
Route::post('/reclamacion/store',[ReclamoController::class,'store'])->name('reclamacion.store');
Route::get('/reclamacion/edit/{id}',[ReclamoController::class,'edit'])->name('reclamacion.edit');
Route::get('/reclamacion/show/{id}',[ReclamoController::class,'show'])->name('reclamacion.show');
Route::put('/reclamacion/update/{id}',[ReclamoController::class,'update'])->name('reclamacion.update');
Route::delete('/reclamacion/delete/{id}',[ReclamoController::class,'destroy'])->name('reclamacion.delete');

//crud user
Route::get('/users/index',[UserController::class,'index'])->name('users.index');
Route::get('/users/create',[UserController::class,'create'])->name('users.create');
Route::post('/users/store',[UserController::class,'store'])->name('users.store');
Route::get('/users/edit/{id}',[UserController::class,'edit'])->name('users.edit');
Route::put('/users/update/{id}',[UserController::class,'update'])->name('users.update');
Route::delete('/users/delete/{id}',[UserController::class,'destroy'])->name('users.delete');

//Permission
Route::get('/permissions/index',[PermissionController::class,'index'])->name('permissions.index');
Route::get('/permissions/create',[PermissionController::class,'create'])->name('permissions.create');
Route::post('/permissions/store',[PermissionController::class,'store'])->name('permissions.store');
Route::get('/permissions/edit/{id}',[PermissionController::class,'edit'])->name('permissions.edit');
Route::put('/permissions/update/{id}',[PermissionController::class,'update'])->name('permissions.update');
Route::delete('/permissions/delete/{id}',[PermissionController::class,'destroy'])->name('permissions.delete');

//Roles
Route::get('/roles/index',[RoleController::class,'index'])->name('roles.index');
Route::get('/roles/create',[RoleController::class,'create'])->name('roles.create');
Route::post('/roles/store',[RoleController::class,'store'])->name('roles.store');
Route::get('/roles/edit/{role}',[RoleController::class,'edit'])->name('roles.edit');
Route::put('/roles/update/{id}/',[RoleController::class,'update'])->name('roles.update');
Route::delete('/roles/delete/{id}',[RoleController::class,'destroy'])->name('roles.delete');

//Route::resource('roles', App\Http\Controllers\RoleController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
