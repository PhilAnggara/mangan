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

Route::get('/', 'ManganController@index')->name('home');
Route::get('/restoran/{slug}', 'RestoranController@index')->name('restoran');
Route::get('/pencarian', 'ManganController@pencarian')->name('pencarian');
Route::post('/rating/store/', 'ManganController@store')->name('store');

Auth::routes();
