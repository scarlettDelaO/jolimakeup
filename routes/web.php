<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/principal', function () {
    return view('principal');
});

<<<<<<< HEAD
Route::get('/perfil', function () {
    return view('perfil');
=======
Route::get('/login', function () {
    return view('login');
>>>>>>> 0017ecbbadfa084a11f6d146f3d18556abf7dad4
});
