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

Route::get('/login', 'HomeController@showLogin')->name('login');
Route::post('/login', 'HomeController@login');
Route::get('/logout', 'HomeController@logout')->name('logout');

Route::group(['middleware' => ['session']], function () {
	Route::get('/', 'HomeController@index')->name('home');
	Route::get('/addkelas', 'ClassController@showAddClass');
	Route::get('/addkelas/{id}', 'ClassController@addClass');
	Route::get('/kelas/{id}', 'ClassController@detail');
});