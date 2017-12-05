<?php

/*php
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
    $gallery = \App\Gallery::get();
    $add_cars = \App\add_cars::get();
    return view('home/index')->with('gallery', $gallery)
                                    ->with('add_cars', $add_cars);
});
Route::get('/our_fleet', function () {
    $add_cars = \App\add_cars::get();
    return view('home/our_fleet')->with('add_cars', $add_cars);
});

Route::get('/single-car', function () {
    $add_cars = \App\add_cars::get();
    return view('home/single-car')->with('add_cars', $add_cars);
});

Route::get('/contact', 'Home\HomeController@contact');
//Route::get('/single-car', 'Home\HomeController@single_car');

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