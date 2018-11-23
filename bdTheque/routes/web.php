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

Route::get('/', function () {
    return view('index');
});

Route::post('/allComics', 'ComicController@getAllComics');

Route::post('/comicsOrdered', 'ComicController@getAllComicsOrderedByDESC');

Route::post('/thisComic/{id}', 'ComicController@displayThisComic');

Route::get('/wishList', function () {
    return view('wishList');
});