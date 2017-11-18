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

Route::get('delivary', function () {
    return view('delivary');
});

Auth::routes();

Route::get('/delivaryRegister', 'delivariesController@index');
Route::get('/supplierRegister', 'suppliersController@index');
Route::get('/home', 'HomeController@index');
Route::resource('contacts', 'contactController');
Route::resource('delivaries', 'delivariesController');
Route::resource('suppliers', 'suppliersController');
Route::resource('orders', 'ordersController');



//Route::get('contacts/contactList', 'contactController.index');

//Route::get('/contacts', 'contactController@index');

