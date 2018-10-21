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


Route::get('yh/index','YhController@index')->name("yh.index");
Route::any('yh/add','YhController@add')->name("yh.add");
Route::any('yh/edit/{id}','YhController@edit')->name("yh.edit");
Route::get('yh/del/{id}','YhController@del')->name("yh.del");
