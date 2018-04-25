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

Route::get('/', 'PagesController@home')->name('/');

Route::get('/clean', 'PagesController@clean')->name('clear');
Route::get('/fluid', 'PagesController@fluid')->name('fluid');
Route::get('/grid', 'PagesController@grid')->name('grid');
Route::get('/thumbnail', 'PagesController@thumbnail')->name('thumbnail');

Route::get('image-gallery', 'ImageGalleryController@index')->name('image-gallery');
Route::post('image-gallery', 'ImageGalleryController@upload');
Route::delete('image-gallery/{id}', 'ImageGalleryController@destroy');