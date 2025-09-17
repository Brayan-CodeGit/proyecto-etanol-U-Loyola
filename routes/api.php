<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\MateriaPrimaController;
use App\Http\Controllers\ProductoSemielaboradoController;
use App\Http\Controllers\ProductoFinalController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\SalidaController;
use App\Http\Controllers\TraspasoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ClienteController;

Route::apiResource('usuarios', UsuarioController::class);
Route::apiResource('materias-primas', MateriaPrimaController::class);
Route::apiResource('productos-semielaborados', ProductoSemielaboradoController::class);
Route::apiResource('productos-finales', ProductoFinalController::class);
Route::apiResource('ingresos', IngresoController::class);
Route::apiResource('salidas', SalidaController::class);
Route::apiResource('traspasos', TraspasoController::class);
Route::apiResource('proveedores', ProveedorController::class);
Route::apiResource('clientes', ClienteController::class);