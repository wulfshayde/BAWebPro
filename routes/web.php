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
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::prefix('project')->group(function () {
        Route::get('{project}', 'ProjectController@view')->name('project');
        Route::get('{project}/activate', 'ProjectController@activate')->name('project.activate');
        Route::get('{project}/items', 'ProjectController@items')->name('project.items');
        Route::get('{project}/tools', 'ProjectController@tools')->name('project.tools');
    });

    Route::prefix('items')->group(function(){
        Route::get('/', 'ItemController@index')->name('items');
    });

    Route::prefix('tools')->group(function(){
        Route::get('/', 'ToolController@index')->name('tools');
    });

//	Route::get('notifications', function () {
//		return view('pages.notifications');
//	})->name('notifications');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

