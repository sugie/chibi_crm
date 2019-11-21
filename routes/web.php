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

Route::get('/users', 'UserController')->name('店員一覧')->middleware('auth');
Route::get('/roles', 'RoleController')->name('ロール一覧')->middleware('auth');

Route::resource('/customers', 'CustomerController')->middleware('auth');
Route::post('/customers/{customer}/logs', 'CustomerLogController')->middleware('auth');
Route::get('customer_search', 'CustomerSearchController@index')->middleware('auth');
Route::post('customer_search', 'CustomerSearchController@search')->middleware('auth');
