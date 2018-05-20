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
	
	Route::group(['middleware' => ['siswa']], function () {
		Route::get('/subkelas', 'ClassController@showsubClass');
		Route::get('/subkelas/{id}', 'ClassController@subClass');
		Route::get('/kelas/{id}', 'ClassController@detail');
	});

	Route::group(['middleware' => ['dosen']], function () {
		Route::get('/detailkelas/{id}', 'AdminController@detailKelas')->name('admin.detail');
		Route::get('/addkelas', 'AdminController@showAddKelas');
		Route::post('/addkelas', 'AdminController@addKelas');
		Route::get('/batal/{id}', 'AdminController@batalPertemuan');
		Route::get('/hadir/{id}', 'AdminController@hadirPertemuan');
		Route::get('/info/{id}', 'AdminController@infoPertemuan');
		Route::post('/upload', 'AdminController@showUploadFile');
	});
});