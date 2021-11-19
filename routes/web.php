<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrearEmpresaController;

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
/* Rutas de los links--------------------------------------------------- */
Route::get('/empresas',function(){
    return view('buscador');
    
})->name('empresas');
Route::get('/convocatorias',function(){
    return view('convocatoria');
    
})->name('convocatorias');
/*---------------------------------------------------------------------*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('empresas', 'App\Http\Controllers\CrearEmpresaController@store');