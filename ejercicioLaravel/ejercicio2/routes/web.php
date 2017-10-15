<?php

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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'controladorcontacto@create');
Route::post('/','controladorcontacto@store');
Route::get('/contactos', 'controladorcontacto@index');
Route::get('/contactos/{slug?}', 'controladorcontacto@show');
Route::get('/contactos/{slug?}/edit', 'controladorcontacto@edit');
Route::post('/contactos/{slug?}/edit', 'controladorcontacto@update');
Route::post('/contactos/{slug?}/delete', 'controladorcontacto@destroy');
