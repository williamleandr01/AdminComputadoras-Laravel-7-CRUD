<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'WelcomeController@index')->name('welcome');

// Se desactiva el registro y la recuperacion de contraseña
Auth::routes(['register'=>false, 'reset'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

//////////////////////////////////////////////////////////////

// Rutas de Computadoras *************************************

Route::get('computadora', 'ComputadoraController@index')->name('computadora');
Route::get('computadora/crear', 'ComputadoraController@create')->name('computadora.crear');
Route::post('computadora/guardar', 'ComputadoraController@store')->name('computadora.guardar');
Route::delete('computadora/eliminar/{id}', 'ComputadoraController@destroy')->name('computadora.eliminar');
Route::put('computadora/editar/{id}', 'ComputadoraController@edit')->name('computadora.editar');
Route::put('computadora/actualizar/{id}', 'ComputadoraController@update')->name('computadora.actualizar');

// *************************************************************
