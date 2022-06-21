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

Route::get('/', 'InmuebleController@index')->name('inmueble');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/getMunicipios', ['uses' => 'HomeController@getMunicipios']);

Route::get('/usuarios', 'UsuariosController@index')->name('usuarios');
Route::get('/usuarios/crear', 'UsuariosController@create')->name('usuarios.create');

Route::get('/docentes', 'DocentesController@index')->name('docentes');


