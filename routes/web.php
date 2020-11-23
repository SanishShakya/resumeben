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
//
//Route::get('/', function () {
//    return view('welcome');
//});
Route::prefix('/')->namespace('Frontend')->name('frontend.')->group( function () {
    Route::get('/', 'FrontendController@index')->name('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Backend') -> name('backend.') -> middleware('auth')->prefix('backend/')->  group(function() {
    /*route for product controller*/
    Route::resource('faq','FaqController');
    Route::resource('review','ReviewController');
    Route::resource('information','InformationController');
    Route::get('information/create','InformationController@create')->name('information.create');
    Route::post('information','InformationController@store')->name('information.store');
    Route::get('information','InformationController@index')->name('information.index');
    Route::delete('information/{id}','InformationController@destroy')->name('information.destroy');
    Route::get('information/{id}','InformationController@show')->name('information.show');
    Route::get('information/{id}/edit','InformationController@edit')->name('information.edit');
    Route::put('information/{id}','InformationController@update')->name('information.update');
    Route::get('faq/create','FaqController@create')->name('faq.create');
    Route::post('faq','FaqController@store')->name('faq.store');
    Route::get('faq','FaqController@index')->name('faq.index');
    Route::delete('faq/{id}','FaqController@destroy')->name('faq.destroy');
    Route::get('faq/{id}','FaqController@show')->name('faq.show');
    Route::get('faq/{id}/edit','FaqController@edit')->name('faq.edit');
    Route::put('faq/{id}','FaqController@update')->name('faq.update');
    Route::get('user/create','UserController@create')->name('user.create');
    Route::post('user','UserController@store')->name('user.store');
    Route::get('user','UserController@index')->name('user.index');
    Route::delete('user/{id}','UserController@destroy')->name('user.destroy');
    Route::get('user/{id}','UserController@show')->name('user.show');
    Route::get('user/{id}/edit','UserController@edit')->name('user.edit');
    Route::put('user/{id}','UserController@update')->name('user.update');
    Route::post('review','ReviewController@store')->name('review.store');
    Route::get('review','ReviewController@index')->name('review.index');
    Route::delete('review/{id}','ReviewController@destroy')->name('review.destroy');
    Route::get('review/{id}','ReviewController@show')->name('review.show');
    Route::get('review/{id}/edit','ReviewController@edit')->name('review.edit');
    Route::put('review/{id}','ReviewController@update')->name('review.update');
});
