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

// Temporary
Route::get('/pencarian', 'ManganController@pencarian')->name('pencarian');
Route::get('/restoran', 'ManganController@restoran')->name('restoran');

Auth::routes();
