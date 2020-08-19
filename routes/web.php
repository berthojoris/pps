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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/priapunyaselera', 'PpsController@index')->name('pps');
Route::post('/agevalidate', 'PpsController@agevalidate')->name('agevalidate');
Route::post('/reg', 'PpsController@reg')->name('reg');
Route::get('/genxls', 'PpsController@genxls')->name('genxls');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
