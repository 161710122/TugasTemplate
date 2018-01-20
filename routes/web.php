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

Route::get('/naruto', function () {
    return view('galeri');
});
Route::get('/OP', function () {
    return view('galeri1');
});
Route::get('/galeri', function () {
    return view('galeri2');
});

Route::get('/paragraf', function () {
    return view('paragraf');
});
Route::get('/aldhit21', function () {
    return view('Aldhit21');
});

Route::get('/sosmed', function () {
    return view('custom');
});
 
 Route::get('/biodata', function () {
    return view('custom1');
});
Auth::routes() ;

Route::get('/home', 'HomeController@index')->name('home');

Route::get('hem','siswaController@data');