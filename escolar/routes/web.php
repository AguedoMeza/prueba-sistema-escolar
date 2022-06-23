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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/getMunicipios', ['uses' => 'HomeController@getMunicipios']);

Route::get('/usuarios', 'UsuariosController@index')->name('usuarios');
Route::get('/usuarios/crear', 'UsuariosController@create')->name('usuarios.create');

Route::get('/docentes', 'DocentesController@index')->name('docentes');
Route::get('/docentes/crear', 'DocentesController@create')->name('docentes.create');
Route::post('/docentes/store', 'DocentesController@store')->name('docentes.store');
Route::get('/docentes/asignarMateria', 'DocentesController@asignarMateria')->name('docentes.asignarMateria');
Route::get('/docentes/test', 'DocentesController@test')->name('docentes.test');

Route::get('/materias', 'MateriasController@index')->name('materias');
Route::get('/materias/store', 'MateriasController@store')->name('materias.store');

Route::get('/alumnos/asignarMateria', 'AlumnosController@asignarMateria')->name('alumnos.asignarMateria');



