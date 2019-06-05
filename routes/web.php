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

Route::get('/serie/{id}', 'SerieController@show');
Route::get('/serie/{id}/actors', 'SerieController@showActors');
Route::get('/serie/{id}/characters', 'SerieController@showCharacters');
