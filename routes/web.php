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
Route::get('preguntas-frecuentes', 'FrontController@faqs')->name('faqs');
Route::get('blog', 'FrontController@blog')->name('blog');
Route::get('blog/{category}', 'FrontController@blog');
Route::get('blog/{category}/{slug}', 'FrontController@postshow')->name('blog.postshow');




Route::resource('post', 'PostController');

//Authentication
Auth::routes();

Route::group(['prefix' => 'admin'], function(){
   Route::group(['middleware'=>'access'], function() {
    Route::get('/', 'PanelController@index');

    Route::resource('/usuarios', 'UserController');
    Route::resource('post', 'PostController');
  });
});
