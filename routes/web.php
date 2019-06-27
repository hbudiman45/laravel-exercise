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

Route::view('/', 'welcome');
Route::view('contact', 'contact');
Route::view('about', 'about');

Route::resource('customers', 'CustomersController');

Route::resource('posts', 'PostsController');

// code above is cleaner than code below. work same
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('contact', function () {
//     return view('contact'); its refer to contact.blade.php
// });
// Route::get('about', function () {
//     return view('about');
// });

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
