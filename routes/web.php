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

Route::get('/', 'GastoController@index');
Route::get('/login', 'HomeController@login');

Route::get('/protected', 'HomeController@index');
Route::get('/gastos/lista', 'GastoController@lista')->name('gastos.lista');

//CRUD
Route::resource('gastos', 'GastoController');
Route::resource('categorias', 'CategoriaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
