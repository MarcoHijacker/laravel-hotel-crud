<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index') -> name('home');

Route::get('/stanze', 'StanzaController@index') -> name('stanze-index');
Route::get('/stanza/{id}', 'StanzaController@show') -> name('stanza-show');

Route::get('/create/stanze', 'StanzaController@create') -> name('stanza-create');
Route::post('/create/stanze', 'StanzaController@store') -> name('stanza-store');
