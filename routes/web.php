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
Route::get('/koneksi', function () {
    return view('koneksi');
});
route::get('/dosen', 'DosenController@dosen');
Route::get('/dosen/cari', 'DosenController@pencarian');
Route::get('/dosen/formulirdosen', 'DosenController@formulirdosen');
Route::post('/dosen/simpandosen', 'DosenController@simpandosen');
Route::get('/dosen/editdosen/{id}', 'DosenController@editdosen');
Route::put('/dosen/updatedosen/{id}', 'DosenController@updatedosen');
Route::get('/dosen/hapusdosen/{id}', 'DosenController@hapusdosen');