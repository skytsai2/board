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

// Route::get('/', 'BoardController@index');
Route::resource('board', 'BoardController');

Route::get('/user/login', "UserController@loginView");
Route::post('/user/login', "UserController@login");
Route::get('/user/logout', "UserController@logout");