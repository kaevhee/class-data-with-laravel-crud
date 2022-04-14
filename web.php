<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'DataController@home');

Route::get('/create', 'DataController@create');

Route::get('/showAll', 'DataController@showAll');
Route::post('/create', 'DataController@store');

Route::get('data/{id}/delete', 'DataController@delete');

Route::get('data/{id}/edit', 'DataController@edit');
Route::put('data/{id}/update', 'DataController@update');

