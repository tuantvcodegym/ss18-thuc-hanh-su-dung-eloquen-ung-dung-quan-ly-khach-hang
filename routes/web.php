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
Route::get('list', 'TaskController@index')->name('list');

Route::get('{id}/edit', 'TaskController@edit')->name('edit');
Route::post('{id}/edit', 'TaskController@update')->name('update');

Route::get('insert', 'TaskController@create')->name('create');
Route::post('insert', 'TaskController@store')->name('store');

Route::get('{id}/destroy', 'TaskController@destroy')->name('destroy');
