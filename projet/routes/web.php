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

Route::get('/', [
    'as' => 'login',
    'uses' => 'Users\usersController@userView'
]);

Route::post('/', [
    'as' => 'login',
    'uses' => 'Users\usersController@userView'
]);




//MIKEL PRUEBA
Auth::routes();

Route::get('/home', 'HomeController@index');
