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


// User Accounts routes
Auth::routes();

// Password recovery routes
//Route::get('password/reset/{token?}', 'Auth\ResetPasswordController@showResetForm');
//Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sentResetEmail']);
//Route::post('password/reset/', 'Auth\ResetPasswordController@reset');

// Basic pages routes
Route::get('contact', 'PagesController@getContact');
Route::get('about', 'PagesController@getAbout');
Route::get('/', 'PagesController@getIndex');

// Eloquent routes
Route::resource('posts', 'PostController');

// Simple routes
Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d-\_]+');
Route::get('blog', ['as' => 'blog.index', 'uses' => 'BlogController@index']);


//Route::get('/home', 'HomeController@index')->name('home');
