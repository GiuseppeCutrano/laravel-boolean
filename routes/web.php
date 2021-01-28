<?php

use Illuminate\Support\Facades\Route;
use config\navbar;

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




Route::get('/', "home@index")->name("home");
Route::get('/corso', "corso@index")->name("corso");
Route::get('/dopo', "dopo@index")->name("dopo");
Route::get('/camp', "camp@index")->name("camp");

Route::get('/lista', 'UtentiController@index')->name('lista');
Route::get('/utenti/{id}', 'UtentiController@show');








