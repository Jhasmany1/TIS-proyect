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


/************************* */
Route::get('/addPropuesta',function(){
    return view('addPropuesta');
});

Route::get('/listaPropuesta',function(){
    return view('listaPropuesta');
});


/*-------------------------Rutas nuevas vistas-------------------------*/

Route::post('/addPropuesta', [App\Http\Controllers\SobreController::class, 'store']);
Route::get('/listaPropuesta', [App\Http\Controllers\SobreController::class, 'index']);



/*-----------------------Ruta envio de correos---------------------------*/

Route::post('listaPropuesta', [App\Http\Controllers\MensajeController::class, 'store']);