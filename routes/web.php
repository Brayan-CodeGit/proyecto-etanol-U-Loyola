<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SalidaController;
use App\Http\Controllers\TraspasoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ProductoFinalController;
use App\Http\Controllers\ProductoSemielaboradoController;


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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas solo para Administrador
Route::middleware(['auth', 'rol:Administrador'])->group(function () {
    Route::resource('usuarios', UsuarioController::class);
});

// Rutas para Administrador y Supervisor
Route::middleware(['auth', 'rol:Administrador,Supervisor'])->group(function () {
    Route::resource('proveedores', ProveedorController::class);
    Route::resource('traspasos', TraspasoController::class);
});

// Rutas para todos los roles
Route::middleware(['auth', 'rol:Administrador,Supervisor,Operador'])->group(function () {
    Route::resource('productos-finales', ProductoFinalController::class);
    Route::resource('productos-semielaborados', ProductoSemielaboradoController::class);
    Route::resource('salidas', SalidaController::class);
});


require __DIR__.'/auth.php';
