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

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/homepage', 'postController@index');
Route::resource('post', 'postController');

Route::resource('contacts', 'contactController');
//Route::get('contacts/contactList', 'contactController.index');

//Route::get('/contacts', 'contactController@index');
