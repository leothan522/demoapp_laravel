<?php

use App\Http\Controllers\Dashboard\FirebaseController;
use App\Http\Controllers\Dashboard\ParametrosController;
use App\Http\Controllers\Dashboard\SearchController;
use App\Http\Controllers\Dashboard\UsersController;
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
Route::match(
    ['get', 'post'],
    '/dashboard/navbar/search',
    [SearchController::class, 'showNavbarSearchResults']
)->middleware(['auth', 'isadmin', 'estatus']);

Route::middleware(['auth', 'verified', 'isadmin', 'estatus', 'permisos'])->prefix('/dashboard')->group(function (){

    Route::get('parametros/{parametro?}', [ParametrosController::class, 'index'])->name('parametros.index');
    Route::get('usuarios/{usuario?}', [UsersController::class, 'index'])->name('usuarios.index');
    Route::get('export/usuarios/{buscar?}', [UsersController::class, 'export'])->name('usuarios.excel');
    Route::get('pdf/usuarios', [UsersController::class, 'createPDF'])->name('usuarios.pdf');

    Route::get('test-firebase', [FirebaseController::class, 'test'])->name('firebase.test');

});
