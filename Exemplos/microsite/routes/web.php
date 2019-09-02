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

Route::get('/', 'PagesController@gethome'); //passa o nome da classe controller@ e a função que desejo chamar

Route::get('/clientes/{pos}', 'PagesController@getclientes');

Route::get('/contatos', 'PagesController@getcontatos');