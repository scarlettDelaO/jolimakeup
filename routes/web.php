<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

/*Route::get('/principal', function () {
    return view('principal');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/ojos', function () {
    return view('ojos');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/agregar', function () {
    return view('agregar');
});*/

Route::controller(UserController::class)->group(function(){
    Route::get('principal', 'home');
    Route::get('login', 'login');
    Route::get('perfil','prueba');
    Route::get('registro', 'regi');
    Route::get('perfil', 'per');
    Route::get('ojos', 'cate1');
    Route::get('rostro', 'cate2');
    Route::get('labios', 'cate3');
    Route::get('tools', 'cate4');
    Route::get('atencion', 'ate');
    Route::get('carrito', 'car');
});

Route::controller(AdminController::class)->group(function(){
    Route::get('login', 'login');
    Route::get('agregar', 'agre');
    Route::get('productos', 'pro');
});

