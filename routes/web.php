<?php

Route::get('/', function () {
    return view('home');
})->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('mangas','MangaController');
Route::resource('commentaire', 'CommentController');