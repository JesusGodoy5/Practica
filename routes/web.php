<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegistrarProductos;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('principal');

})->name('principal');


//Registro de usuarios
Route::get('/register', [RegisterController::class, 'index'])->name('register');
//Guardar usuario
Route::post('/register', [RegisterController::class, 'store']);
//Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
//Cerrar sesio 
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::post('/login', [LoginController::class, 'store']);
//Dashboard
Route::get('/dashboard', [PostController::class, 'index'])->name('posts.index');
//Tabla de productos
Route::get('/productos',[RegistrarProductos::class,'index'])->name('productos');
//Añadir producto nuevo
Route::get('/newproduct',[RegistrarProductos::class,'newProduct'])->name('newproduct');
//Agregar productos
Route::post('/newproduct',[RegistrarProductos::class,'store']);
//Eliminar productos
Route::post('/deleteproduct',[RegistrarProductos::class,'delete'])->name('delete');