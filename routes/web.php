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

Route::get('/', 'PageController@index');
Route::get('/tickets', 'TicketsController@index');
Route::get('/tickets/create', 'TicketsController@create');
Route::post('/tickets/create', 'TicketsController@store');
