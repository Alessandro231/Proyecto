<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/pokemon/search/{name}', 'pokemonController@search');
Route::post('/pokemon/save', 'pokemonController@saveFromApi');

Route::get('/user', function (Request $request) {
    return $request->user();
});
