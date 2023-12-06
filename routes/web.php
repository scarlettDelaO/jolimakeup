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
    //Route::post('login', 'login');
    Route::get('perfil','prueba');
    Route::post('users','regUser');
    Route::get('perfil', 'per');
    Route::get('ojos', 'cate1');
    Route::get('rostro', 'cate2');
    Route::get('labios', 'cate3');
    Route::get('tools', 'cate4');
    Route::get('atencion', 'ate');
    Route::get('carrito', 'car');
    Route::get('pago', 'pay');
    Route::get('ojos','showOjos');
    Route::get('labios','showLabios');
    Route::get('tools','showTools');
    Route::get('rostro','showRostro');
});

Route::controller(AdminController::class)->group(function(){
    Route::post('login', 'login');
    Route::get('agregar', 'agre');
    Route::post('productos','agregarPro');
    Route::get('productos', 'showProd')->name('productos');;
    Route::get('modificar','modif');
    Route::get('producto/{id}', 'edit')->name('modificar');
    Route::PUT('producto/{id}', 'update')->name('actualizar');
    Route::delete('producto/{id}', 'destroy')->name('eliminar');
    Route::get('ventas', 'showVen');
});

