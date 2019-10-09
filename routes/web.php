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

Route::get('/pengguna', 'PenggunaController@index');

Route::get('/pengguna/tambah', 'PenggunaController@tambah');

Route::post('pengguna/store', 'PenggunaController@store');

Route::get('/pengguna/edit/{id}', 'PenggunaController@edit');

Route::put('/pengguna/update/{id}', 'PenggunaController@update');
Route::get('/pengguna/hapus/{id}', 'PenggunaController@delete');
Route::get('/pengguna/cari', 'PenggunaController@cari');