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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('admin/categories',['as'=>'admin.categories.index','uses' => 'CategoriesController@index']);
Route::get('admin/categories/create',['as'=>'admin.categories.create','uses' => 'CategoriesController@create']);
Route::get('admin/categories/edit/{id}',['as'=>'admin.categories.edit','uses' => 'CategoriesController@edit']);
Route::post('admin/categories/update/{id}',['as'=>'admin.categories.update','uses' => 'CategoriesController@update']);
Route::post('admin/categories/store',['as'=>'admin.categories.store','uses' => 'CategoriesController@store']);
