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

Route::get('/musicbook', 'PagesController@musicbook')->name('musicbook');
Route::get('/sex-ed', 'PagesController@sexEd')->name('sex-ed');
Route::get('/smart-fridge', 'PagesController@smartFridge')->name('smart-fridge');
Route::get('/truckladders', 'PagesController@truckladders')->name('truckladders');

// 404 Error if route doesn't match
Route::get('{any?}', function(){
    abort(404);
});
