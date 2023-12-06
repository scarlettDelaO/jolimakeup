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


/*
// Rutas públicas
Route::get('/principal', [UserController::class, 'home']);
Route::get('/login', [UserController::class, 'lo'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('doLogin');
Route::get('/registro', [UserController::class, 'regi']);

// Rutas de usuario autenticado
Route::middleware(['auth'])->group(function () {
    Route::get('/perfil', [UserController::class, 'per'])->name('perfil');
    Route::post('/perfil', [UserController::class, 'regUser']);
    Route::get('perfil/{id}', [UserController::class,'edit'])->name('modificar');
    Route::get('/ojos', [UserController::class, 'showOjos']);
    Route::get('/labios', [UserController::class, 'showLabios']);
    Route::get('/tools', [UserController::class, 'showTools']);
    Route::get('/rostro', [UserController::class, 'showRostro']);
    Route::get('/atencion', [UserController::class, 'ate']);
    Route::get('/carrito', [UserController::class, 'car']);
    Route::get('/pago', [UserController::class, 'pay']);
});

// Rutas específicas de administrador
Route::middleware(['admin'])->group(function () {
    Route::get('/productos', [AdminController::class, 'showProd'])->name('productos');
    Route::get('/agregar', [AdminController::class, 'agre']);
    Route::post('/productos', [AdminController::class, 'agregarPro']);
    Route::get('/modificar', [AdminController::class, 'modif']);
    Route::get('/producto/{id}', [AdminController::class, 'edit'])->name('modificar');
    Route::put('/producto/{id}', [AdminController::class, 'update'])->name('actualizar');
    Route::delete('/producto/{id}', [AdminController::class, 'destroy'])->name('eliminar');
    Route::get('/ventas', [AdminController::class, 'showVen']);
});

// Ruta para redireccionar según el rol del usuario
Route::get('/redirect', function () {
    if (auth()->User()->role_id == 1) {
        // Redirige a los administradores a la vista de productos
        return redirect()->route('productos');
    }
    // Redirige a los usuarios no administradores a su perfil
    return redirect()->route('perfil');
})->middleware('auth')->name('redirect');

// Fallback para rutas no definidas
Route::fallback(function () {
    return view('404'); // Asumiendo que tienes una vista para errores 404
});*/

Route::controller(UserController::class)->group(function(){

    // Rutas para vistas estáticas y procesos simples
    Route::get('principal', 'home');
    Route::get('login', 'lo')->name('login');
    Route::get('registro', 'regi');
    Route::get('ojos', 'cate1');
    Route::get('rostro', 'cate2');
    Route::get('labios', 'cate3');
    Route::get('tools', 'cate4');
    Route::get('atencion', 'ate');
    Route::get('carrito', 'car');
    Route::get('pago', 'pay');

    // Rutas para procesos de usuario
    Route::post('login', 'login')->name('doLogin');
    Route::post('perfil/registrar', 'regUser'); // Ruta para registrar usuario

    // Ruta para el perfil del usuario autenticado
    Route::get('perfil', 'per')->name('perfil');

    // Rutas para mostrar categorías de productos
    Route::get('ojos', 'showOjos');
    Route::get('labios', 'showLabios');
    Route::get('tools', 'showTools');
    Route::get('rostro', 'showRostro');
});

Route::controller(AdminController::class)->group(function(){
    //Route::get('productos','productos')->name('productos');
    Route::get('agregar', 'agre');
    Route::post('productos','agregarPro');
    Route::get('productos', 'showProd')->name('productos');;
    Route::get('modificar','modif');
    Route::get('producto/{id}', 'edit')->name('modificar');
    Route::put('producto/{id}', 'update')->name('actualizar');
    Route::delete('producto/{id}', 'destroy')->name('eliminar');
    Route::get('ventas', 'showVen');
    Route::get('productos', [AdminController::class, 'buscarProductos'])->name('buscarProductos');
});

