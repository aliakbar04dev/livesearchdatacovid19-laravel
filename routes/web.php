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



Route::get('/', 'CovidController@index')->name('index');
Route::get('/datapositif', 'CovidController@chart')->name('positif');
Route::get('/datasembuh', 'CovidController@chartSembuh')->name('sembuh');
Route::get('/datameninggal', 'CovidController@chartMeninggal')->name('meninggal');