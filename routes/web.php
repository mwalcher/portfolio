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

/* Projects */
Route::get('/libro', 'PagesController@libro')->name('libro');
Route::get('/pink-precast', 'PagesController@pinkPrecast')->name('pink-precast');
Route::get('/zucora', 'PagesController@zucora')->name('zucora');

/* Single Pages */
Route::get('/coming-soon', 'PagesController@comingSoon')->name('coming-soon');
Route::get('/thank-you', 'PagesController@thankYou')->name('thank-you');

/* Form Submission */
Route::post('/submit', 'FormController@submit')->name('submit-form');

// 404 Error if route doesn't match
Route::get('{any?}', function(){
    abort(404);
});

/* Disabled Routes */
Route::get('/whats-my', 'PagesController@whatsMy')->name('whats-my');
