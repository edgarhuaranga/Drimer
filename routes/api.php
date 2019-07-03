<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login','ApiController@login');
Route::get('/workers','ApiController@workers');
Route::get('/tiendas', 'ApiController@tiendas');

Route::get('/products', 'ApiController@products');
Route::get('/products_competencia', 'ApiController@productsCompetencia');
Route::get('/pop_materials', 'ApiController@popMaterials');
Route::get('/merch_materials', 'ApiController@merchMaterials');
Route::post('/store_impulso', 'ApiController@saveCanje');
Route::get('/store_mercaderismo', 'ApiController@saveMercaderismo');
Route::get('/store_pop', 'ApiController@savePOP');
Route::post('/store_stock_merch', 'ApiController@saveStockMerch');
Route::post('/get_stock_by_label', 'ApiController@getStockByLabel');
Route::get('/remove_stock', 'ApiController@removeStock');

Route::get('/base_mercaderismo', 'ApiController@baseMercaderismo');
