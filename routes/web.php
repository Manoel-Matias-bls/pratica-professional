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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'EntradasController@index');
Route::get('entrada', 'EntradasController@create');
Route::get('listagem', 'EntradasController@show');

Route::post('entrada/store', 'EntradasController@store');

Route::get('entrada/{entrada}/editar', 'EntradasController@edit');

Route::patch('entrada/{entrada}', 'EntradasController@update');

Route::delete('entrada/{entrada}', 'EntradasController@delete');



