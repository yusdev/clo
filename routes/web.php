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

//Front
Route::get('/', 'FrontController@index')->name('index');
Route::get('nosotros', 'FrontController@aboutus')->name('aboutus');
Route::get('contacto', 'FrontController@contactus')->name('contactus');
Route::post('contacto', 'FrontController@contactus_post');
Route::get('blog', 'FrontController@blog')->name('blog');


Auth::routes();

//Route::resource('/blog', 'PostController');

Route::get('/home', 'HomeController@index')->name('home');
