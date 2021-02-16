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

Route::get('/','BackController@index');
Route::get('/AddCategory','CategoryController@AddCategory')->name('AddCategory');
Route::post('/storCategory','CategoryController@storCategory');
Route::post('/updateCategory','CategoryController@updateCategory');
Route::get('/ManageCategory','CategoryController@ManageCategory')->name('ManageCategory');
Route::get('/deleteCategory/{id}','CategoryController@deleteCategory');
Route::get('/editCategory/{id}','CategoryController@editCategory');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
