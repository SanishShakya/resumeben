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

Route::namespace('Backend') -> name('backend.') -> middleware('auth') -> middleware('permission') -> prefix('backend/')->  group(function() {
    /*route for product controller*/
    Route::resource('faq','FaqController');
    Route::resource('review','ReviewController');
    Route::resource('information','InformationController');
    /* route for information controller*/
    Route::get('information/create','InformationController@create')->name('information.create');
    Route::post('information','InformationController@store')->name('information.store');
    Route::get('information','InformationController@index')->name('information.index');
    Route::delete('information/{id}','InformationController@destroy')->name('information.destroy');
    Route::get('information/{id}','InformationController@show')->name('information.show');
    Route::get('information/{id}/edit','InformationController@edit')->name('information.edit');
    Route::put('information/{id}','InformationController@update')->name('information.update');
    /* route for faq controller*/
    Route::get('faq/create','FaqController@create')->name('faq.create');
    Route::post('faq','FaqController@store')->name('faq.store');
    Route::get('faq','FaqController@index')->name('faq.index');
    Route::delete('faq/{id}','FaqController@destroy')->name('faq.destroy');
    Route::get('faq/{id}','FaqController@show')->name('faq.show');
    Route::get('faq/{id}/edit','FaqController@edit')->name('faq.edit');
    Route::put('faq/{id}','FaqController@update')->name('faq.update');
    /* route for user controller*/
    Route::get('user/create','UserController@create')->name('user.create');
    Route::post('user','UserController@store')->name('user.store');
    Route::get('user','UserController@index')->name('user.index');
    Route::delete('user/{id}','UserController@destroy')->name('user.destroy');
    Route::get('user/{id}','UserController@show')->name('user.show');
    Route::get('user/{id}/edit','UserController@edit')->name('user.edit');
    Route::put('user/{id}','UserController@update')->name('user.update');
    /* route for review controller*/
    Route::post('review','ReviewController@store')->name('review.store');
    Route::get('review','ReviewController@index')->name('review.index');
    Route::delete('review/{id}','ReviewController@destroy')->name('review.destroy');
    Route::get('review/{id}','ReviewController@show')->name('review.show');
    Route::get('review/{id}/edit','ReviewController@edit')->name('review.edit');
    Route::put('review/{id}','ReviewController@update')->name('review.update');
    /* route for module controller*/
    Route::get('module/create','ModuleController@create')->name('module.create');
    Route::post('module','ModuleController@store')->name('module.store');
    Route::get('module','ModuleController@index')->name('module.index');
    Route::delete('module/{id}','ModuleController@destroy')->name('module.destroy');
    Route::get('module/{id}','ModuleController@show')->name('module.show');
    Route::get('module/{id}/edit','ModuleController@edit')->name('module.edit');
    Route::put('module/{id}','ModuleController@update')->name('module.update');

    /* route for permission controller*/
    Route::get('permission/create','PermissionController@create')->name('permission.create');
    Route::post('permission','PermissionController@store')->name('permission.store');
    Route::get('permission','PermissionController@index')->name('permission.index');
    Route::delete('permission/{id}','PermissionController@destroy')->name('permission.destroy');
    Route::get('permission/{id}','PermissionController@show')->name('permission.show');
    Route::get('permission/{id}/edit','PermissionController@edit')->name('permission.edit');
    Route::put('permission/{id}','PermissionController@update')->name('permission.update');

    /* route for role controller*/
    Route::get('role/create','RoleController@create')->name('role.create');
    Route::post('role','RoleController@store')->name('role.store');
    Route::get('role','RoleController@index')->name('role.index');
    Route::delete('role/{id}','RoleController@destroy')->name('role.destroy');
    Route::get('role/{id}','RoleController@show')->name('role.show');
    Route::get('role/{id}/edit','RoleController@edit')->name('role.edit');
    Route::put('role/{id}','RoleController@update')->name('role.update');
    Route::get('role/permission/{id}','RoleController@showPermission')->name('role.permission');
    Route::post('role/assign_permission','RoleController@assignPermission')->name('role.assign_permission');

});
