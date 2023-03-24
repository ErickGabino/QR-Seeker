<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\RegisterAdministradores;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\ProductoController;

/* RUTAS DE REGISTRO */
Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/register', [RegisterController::class,'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class,'store'])
    ->name('register.store');

    
/* RUTAS DE LOGIN (PRUEBA) */
Route::get('/login', [SessionsController::class,'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionsController::class,'store'])
    ->name('login.store');


/* RUTAS DE LOGIN (FINAL) */
 Route::get('/inicio', [InicioController::class,'create'])
    ->middleware('guest')
    ->name('inicio.index');

Route::post('/inicio', [InicioController::class,'store'])
    ->name('inicio.store');

Route::get('/logout', [SessionsController::class,'destroy'])
    ->middleware('auth')
    ->name('login.destroy');    


/* RUTAS DE ADMINISTRADORES */
Route::get('/registerAd', [RegisterAdministradores::class,'create'])
    ->middleware('auth')
    ->name('registerAd.index');

Route::post('/registerAd', [RegisterAdministradores::class,'store'])
    ->name('registerAd.store');

Route::get('/consultaAd', [RegisterAdministradores::class,'read'])
    ->middleware('auth')
    ->name('consultaAd.index');


/* RUTAS DE SUCURSALES */
Route::get('/sucursal', [SucursalController::class,'create'])
    ->middleware('auth')
    ->name('sucursal.index');

Route::post('/sucursal', [SucursalController::class,'store'])
    ->name('sucursal.store');

Route::get('/consultaSuc', [SucursalController::class,'read'])
    ->middleware('auth')
    ->name('consultaSuc.index');


/* RUTAS DE PRODUCTOS */
Route::get('/registerProduc', [ProductoController::class,'create'])
    ->middleware('auth')
    ->name('registerProduc.index');

Route::post('/registerProduc', [ProductoController::class,'store'])
    ->name('registerProduc.store');

Route::get('/ConsultaProd', [ProductoController::class,'read'])
    ->middleware('auth')
    ->name('consultaProd.index');


Route::get('/imprimir-pdf/{id}', [ProductoController::class,'imprimir'])
    ->name('print');

