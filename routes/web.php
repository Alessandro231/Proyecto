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

Auth::routes();

Route::get('welcome', 'HomeController@welcome')->name('welcome');
Route::get('home', 'HomeController@index')->name('home');
Route::get('def', 'HomeController@def')->name('def');
Route::get('inside', 'HomeController@inside')->name('inside');
Route::resource('pokemon','pokemonController');
Route::get('pdf', 'PDFController@PDF')->name('descargarPDF');




