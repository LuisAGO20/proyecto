<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Rutas para los Productos
Route::get('/productos',[ProductoController::class,'index'])->name('productos');
Route::get('/nuevo-producto',[ProductoController::class,'nuevo'])->name('productosNuevo');
Route::post('/guardar-producto',[ProductoController::class,'guardar'])->name('guardarProducto');
Route::get('/eliminar-producto/{id}',[ProductoController::class,'eliminar'])->name('eliminarProducto');
Route::get('/confirmar-eliminar-producto/{id}',[ProductoController::class,'confirmarEliminar'])->name('confirmarEliminarProducto');
Route::get('/editar-producto/{id}',[ProductoController::class,'editar'])->name('editarProducto');
Route::post('/actualizar-producto',[ProductoController::class,'actualizar'])->name('actualizarProducto');

//Rutas para las Áreas
Route::get('/areas',[AreaController::class,'index'])->name('areas');
Route::get('/nuevo-area',[AreaController::class,'nuevo'])->name('areasNuevo');
Route::post('/guardar-area',[AreaController::class,'guardar'])->name('guardarArea');
Route::get('/eliminar-area/{id}',[AreaController::class,'eliminar'])->name('eliminarArea');
Route::get('/confirmar-eliminar-area/{id}',[AreaController::class,'confirmarEliminar'])->name('confirmarEliminarArea');
Route::get('/editar-area/{id}',[AreaController::class,'editar'])->name('editarArea');
Route::post('/actualizar-area',[AreaController::class,'actualizar'])->name('actualizarArea');
Route::get('/listado-productos-area/{id}',[AreaController::class,'listadoProductos'])->name('listadoProductosAreas');

//Rutas para las Ventas
Route::get('/ventas',[VentaController::class,'index'])->name('ventas');
Route::post('/guardar-venta',[VentaController::class,'guardar'])->name('guardarVenta');
Route::get('/pdf',[VentaController::class,'PDF'])->name('descargarPDF');

//Rutas para el Usuario
Route::get('/usuarios',[ClienteController::class,'index'])->name('clientes');
Route::get('/nuevo-usuario',[ClienteController::class,'nuevo'])->name('clienteNuevo');
Route::post('/guardar-usuario',[ClienteController::class,'guardar'])->name('guardarCliente');
Route::get('/eliminar-usuario/{id}',[ClienteController::class,'eliminar'])->name('eliminarCliente');
Route::get('/confirmar-eliminar-usuario/{id}',[ClienteController::class,'confirmarEliminar'])->name('confirmarEliminarCliente');
Route::get('/editar-usuario/{id}',[ClienteController::class,'editar'])->name('editarCliente');
Route::post('/actualizar-usuario',[ClienteController::class,'actualizar'])->name('actualizarCliente');

require __DIR__.'/auth.php';
