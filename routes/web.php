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

Route::get('/', 'TopPageController@show');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/program', 'ProgramController@index')->name('program');
Route::get('/program/show/{id}', 'ProgramController@show')->name('program.show');
Route::middleware('auth')->group(function () {
    Route::resource('reviews','ReviewsController',['only' => ['store']]);
});
