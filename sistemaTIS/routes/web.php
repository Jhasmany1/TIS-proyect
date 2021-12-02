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
/* Rutas de los links--------------------------------------------------- */
// Route::get('/addEmpresa',function(){
//     return view('addEmpresa');
    
// })->name('addEmpresa');

// Route::get('/listEmpresas',function(){
//      return view('listEmp');
    
// })->name('listEmpresa');
// Route::get('/listEmpresas', App\Http\Controllers\CrearEmpresaController@index);
// Route::post('empresas', App\Http\Controllers\CrearEmpresaController@store);

Route::get('/listaEmp', [App\Http\Controllers\CrearEmpresaController::class, 'index'])->name('listEmpresa');
Route::resource('empresas',[App\Http\Controllers\CrearEmpresaController::class, 'store'])->name('addEmpresa');

Route::get('/convocatorias',function(){
    return view('convocatoria');
    
})->name('convocatorias');
/*---------------------------------------------------------------------*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

