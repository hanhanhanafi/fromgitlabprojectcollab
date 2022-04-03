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


Route::get("/operator", "HomeController@dashboard");
Route::get("/", "HomeController@index")->name('index');
Route::get("/admin", "adminController@home")->name('admin.index');
Route::get("/admin/mkelas", "adminController@masterkelas");
Route::get("/guru", "HomeController@guru");
Route::get("/operator", "HomepageController@dasboard");
Route::get('/guru/absensi/findMapel/{id}', "absensiController@findMapel");
Route::get('/guru/absensi/findSiswa/{id}', "absensiController@findSiswa");
Route::resource("/admin/mguru", "mguruController");
Route::resource("/admin/mapel", "mmapelController");
Route::resource("/guru/profile", "profileguruController");
Route::resource("/guru/datasiswa", "siswaController");
Route::resource("/guru/absensi", "absensiController");
Route::resource("/admin/mjurusan", "jurusanController");
Route::resource("/operator/relasi", "relasikelasController");
Route::resource("/operator/relasi/guru", "RelasiguruController");
Route::resource("/admin/mkelas", "kelasController");
