<?php

Route::get('/', function () {
    return view('home');
})->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('mangas', 'MangaController');

Route::post('/createComments', 'MangaController@createComments')->name('cc');

Route::get('/mangas/{id}/{chapter}/{pages}', 'MangaController@showWithPage')->where(['id' => '[0-9]+','chapter' => '[0-9]+'])->name('SwP');