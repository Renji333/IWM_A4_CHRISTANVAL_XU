<?php

Route::get('/', function () {
    return view('home');
})->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('mangas', 'MangaController');

Route::get('/createComment/{id}', 'MangaController@createComment')->name('cc');
Route::post('/createComment_store/{id}', 'MangaController@storeComment')->name('cc_store');

Route::get('/mangas/{id}/{chapter}/{pages}', 'MangaController@showWithPage')->where(['id' => '[0-9]+','chapter' => '[0-9]+'])->name('SwP');