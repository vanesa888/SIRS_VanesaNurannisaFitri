<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/w', function () {
    return view('welcome');
});

Route::get('/penyakit', function () {
    return view('penyakit.penyakit');
});

// Route::get('/', function () {
//     return view('login.login');
// });

Route::get('/registrasi', 'loginController@registrasi')->name('registrasi');
Route::get('/', 'loginController@login')->name('login');
Route::post('/simpanregistrasi', 'loginController@simpanregistrasi')->name('simpanregistrasi');
Route::post('/postlogin', 'loginController@postlogin')->name('postlogin');  


Route::get('/kunjung', 'kunjungController@kunjung')->name('kunjung');
Route::get('/home', 'homeController@index')->name('home');
Route::get('/datapasien', 'datapasController@datapasien')->name('datapasien');