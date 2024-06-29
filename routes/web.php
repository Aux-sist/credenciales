<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\admin\PermisoController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\MenuRolController;
use App\Http\Controllers\Admin\RolController;
use App\Http\Controllers\LibroController;

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
Route::get('/', [InicioController::class, 'index']);

Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
    //Rutas de permiso//
    Route::get('permiso', [PermisoController::class, 'index'])->name('permiso');
    Route::get('permiso/crear', [PermisoController::class, 'create'])->name('crear_permiso');
    Route::post('permiso', [PermisoController::class, 'store'])->name('guardar_permiso');
    Route::get('permiso/{id}/editar', [PermisoController::class,'edit'])->name('editar_permiso');
    Route::put('permiso/{id}', [PermisoController::class,'update'])->name('actualizar_permiso');
    Route::delete('permiso/{id}', [PermisoController::class,'destroy'])->name('eliminar_permiso');
    //Rutas del menu//
    Route::get('/menu', [MenuController::class, 'index'])->name('menu');
    Route::get('/menu/crear', [MenuController::class, 'create'])->name('crear_menu');
    Route::post('menu', [MenuController::class, 'store'])->name('guardar_menu');
    Route::get('menu/{id}/editar', [MenuController::class,'edit'])->name('editar_menu');
    Route::put('menu/{id}', [MenuController::class,'update'])->name('actualizar_menu');
    Route::get('menu/{id}/eliminar', [MenuController::class,'destroy'])->name('eliminar_menu');
    Route::post('menu/guardar-orden', [MenuController::class, 'guardarOrden'])->name('guardar_orden');
    //Rutas de Rol//
    Route::get('rol', [RolController::class, 'index'])->name('rol');
    Route::get('rol/crear', [RolController::class, 'create'])->name('crear_rol');
    Route::post('rol', [RolController::class, 'store'])->name('guardar_rol');
    Route::get('rol/{id}/editar', [RolController::class, 'edit'])->name('editar_rol');
    Route::put('rol/{id}', [RolController::class, 'update'])->name('actualizar_rol');
    Route::delete('rol/{id}', [RolController::class, 'destroy'])->name('eliminar_rol');
    //Rutas menu rol//
    Route::get('menu-rol', [MenuRolController::class, 'index'])->name('menu_rol');
    Route::post('menu-rol', [MenuRolController::class, 'store'])->name('guardar_menu_rol');
    
});
//Rutas libro//
Route::get('libro', [LibroController::class, 'index'])->name('libro');
Route::get('libro/crear', [LibroController::class, 'create'])->name('crear_libro');
Route::post('libro', [LibroController::class, 'store'])->name('guardar_libro');
Route::get('libro/{id}/editar}', [LibroController::class, 'edit'])->name('editar_libro');
Route::get('libro/{id}', [LibroController::class, 'update'])->name('actualizar_libro');
Route::delete('libro/{id}', [LibroController::class, 'destroy'])->name('eliminar_libro');
