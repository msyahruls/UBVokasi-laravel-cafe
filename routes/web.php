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

// Route::get('/admin', function () {
//     return view('index');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'WelcomeController@index');

Route::resource('category', 'CategoryController');

Route::resource('product', 'ProductController')->middleware('auth');
// Route::any('product/search', 'ProductController@search');

