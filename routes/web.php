<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\DetalleVentaController;
use App\Http\Controllers\PagoCreditoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('dashboard');
});

// Rutas de Recursos (Conectadas a Base de Datos)
Route::resource('productos', ProductoController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('inventario', InventarioController::class);
Route::resource('ventas', VentaController::class);
Route::resource('detalle-ventas', DetalleVentaController::class);
Route::resource('pagos', PagoCreditoController::class);

// Nueva Ruta para el Catálogo Visual (Sin Base de Datos)
Route::get('/catalogo', function () {
    return view('catalogo');
})->name('catalogo.index');