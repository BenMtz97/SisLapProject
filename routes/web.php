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
Auth::routes();
Route::get('/','HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/equipment/search', 'EquipmentController@search')->name('equipment');
Route::get('/equipment/details/{id}', 'EquipmentController@details')->name('details');
Route::post('/equipment/search', 'EquipmentController@search')->name('equipment');
Route::get('/loans/search', 'LoansController@search')->name('loans');
Route::get('/loans', 'LoansController@index')->name('loans');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
