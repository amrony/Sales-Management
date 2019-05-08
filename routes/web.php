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
Route::get('/accessories-list', 'AccessoriesListController@index')->name('accessories-list');
Route::post('/accessories/add', 'AccessoriesListController@store')->name('add-accessories');


Route::get('/accessories-category', 'AccessoriesCategoryController@index')->name('accessories-category');
Route::post('/create/category', 'AccessoriesCategoryController@create')->name('category-create');
//Route::post('/store/category', 'AccessoriesCategoryController@store')->name('accessories-category');
Route::get('/edit/category/{id}', 'AccessoriesCategoryController@edit')->name('edit-category');
Route::post('/update/category', 'AccessoriesCategoryController@update')->name('category-update');
Route::get('/delete/category/{id}', 'AccessoriesCategoryController@delete')->name('delete-category');


Route::get('/quantity', 'QuantityController@index')->name('quantity');
Route::post('/quantity/add', 'QuantityController@store')->name('add-quantity');
Route::get('/quantity/edit/{id}', 'QuantityController@edit')->name('edit-quantity');
Route::post('/quantity/update', 'QuantityController@update')->name('update-quantity');
Route::get('/quantity/delete/{id}', 'QuantityController@delete')->name('delete-quantity');


Route::get('/add-company', 'CompanyController@index')->name('add-company');
Route::get('/new-info', 'CompanyController@create')->name('new-info');
Route::post('/new-company', 'CompanyController@store')->name('new-company');
Route::get('/edit/{id}', 'CompanyController@edit')->name('edit');
Route::post('/update', 'CompanyController@update')->name('update');
Route::get('/delete/{id}', 'CompanyController@delete')->name('delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

