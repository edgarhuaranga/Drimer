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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/workers', 'WorkerController@index');
Route::get('/workers/create', 'WorkerController@create');
Route::post('/workers', 'WorkerController@store');
Route::get('/workers/{worker}', 'WorkerController@show');
Route::get('/workers/{worker}/edit', 'WorkerController@edit');
Route::post('/workers/{worker}/update', 'WorkerController@update');
Route::get('/workers/{worker}/delete', 'WorkerController@destroy');

Route::get('/cadenas', 'CadenaController@index');
Route::get('/cadenas/crear', 'CadenaController@create');
Route::post('/cadenas', 'CadenaController@store');
Route::get('/cadenas/{cadena}', 'CadenaController@show');
Route::get('/cadenas/{cadena}/editar', 'CadenaController@edit');
Route::post('/cadenas/{cadena}/actualizar', 'CadenaController@update');
Route::get('/cadenas/{cadena}/eliminar', 'CadenaController@destroy');

Route::get('/tiendas', 'TiendaController@index');
Route::get('/tiendas/crear', 'TiendaController@create');
Route::post('/tiendas', 'TiendaController@store');
Route::get('/tiendas/{tienda}', 'TiendaController@show');
Route::get('/tiendas/{tienda}/editar', 'TiendaController@edit');
Route::post('/tiendas/{tienda}/actualizar', 'TiendaController@update');
Route::get('/tiendas/{tienda}/eliminar', 'TiendaController@destroy');

Route::get('/promotores', 'PromotorController@index');
Route::get('/promotores/crear', 'PromotorController@create');
Route::post('/promotores', 'PromotorController@store');
Route::get('/promotores/{promotor}', 'PromotorController@show');
Route::get('/promotores/{promotor}/editar', 'PromotorController@edit');
Route::post('/promotores/{promotor}/actualizar', 'PromotorController@update');
Route::get('/promotores/{promotor}/eliminar', 'PromotorController@destroy');

Route::get('/productos', 'ProductoController@index');
Route::get('/productos/crear', 'ProductoController@create');
Route::post('/productos', 'ProductoController@store');
Route::get('/productos/{producto}', 'ProductoController@show');
Route::get('/productos/{producto}/editar', 'ProductoController@edit');
Route::post('/productos/{producto}/actualizar', 'ProductoController@update');
Route::get('/productos/{producto}/eliminar', 'ProductoController@destroy');

Route::get('/ventas/crear', 'GestionController@create');
Route::get('/ventas', 'GestionController@index');
Route::post('/ventas', 'GestionController@store');
Route::get('/ventas/{gestion}', 'GestionController@show');
Route::get('/ventas/{gestion}/editar', 'GestionController@edit');
Route::post('/ventas/{gestion}/actualizar', 'GestionController@update');
Route::get('/ventas/{gestion}/eliminar', 'GestionController@destroy');

Route::get('/exportarventas', 'GestionController@excel');
