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

Route::get('/', 'ArticleController@index');
Route::get('select/{id}', 'ArticleController@select');
Route::get('login', 'ArticleController@login');
Route::post('auth', 'ArticleController@auth');
Route::get('logout', 'ArticleController@logout');
Route::get('read', 'ArticleController@read');
Route::get('add', 'ArticleController@add');
Route::post('insert', 'ArticleController@insert');
Route::get('edit/{id}', 'ArticleController@edit');
Route::post('update/{id}', 'ArticleController@update');
Route::get('delete/{id}', 'ArticleController@delete');