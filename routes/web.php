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
    return view('register');
});

Route::get('admin/login', 'Admin\Auth\LoginController@showLoginForm');
Route::post('admin/login', 'Admin\Auth\LoginController@login');
Route::get('admin/logout', ['as' => 'logout', 'uses' => 'Admin\Auth\LoginController@logout']);

Route::group(['namespace' => "Admin", 'prefix' => "admin", 'middleware' => "admin_auth"], function () {
    Route::get('/dashboard', ['as' => 'dashboard', 'uses' => "HomeController@index"]);
    Route::resource('user', 'UserController');
    Route::resource('article', 'ArticleController');
    Route::resource('training', 'TrainingController');
    Route::resource('photos', 'PhotosController');


});