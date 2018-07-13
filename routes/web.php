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

Route::get('/', 'PagesController@index')->name('home');

Route::get('/coming-soon', 'PagesController@comingSoon')->name('coming-soon');

Route::get('/zucora', 'PagesController@zucora')->name('zucora');

// 404 Error if route doesn't match
Route::get('{any?}', function(){
    abort(404);
});
