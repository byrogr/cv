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

Route::get('/', 'InventarioController@home')->name('home');
Route::get('/logout', 'HomeController@logout')->name('logout');

Route::get('/tours/{departamento}', 'InventarioController@list')->name('list');
Route::get('/tours/{departamento}/{servicio}', 'InventarioController@detail')->name('detail');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
