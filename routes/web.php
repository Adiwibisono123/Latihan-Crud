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

Route::get('barang', 'BarangController@index');
Route::post('barang', 'BarangController@store');
Route::delete('barang/{id}', 'BarangController@delete');

Route::get('Ruang', 'RuangController@index');
Route::post('Ruang', 'RuangController@store');
Route::delete('Ruang/{id}', 'RuangController@delete');

Route::get('User', 'UserController@index');
Route::post('User', 'UserController@store');
Route::delete('User/{id}', 'UserController@delete');
