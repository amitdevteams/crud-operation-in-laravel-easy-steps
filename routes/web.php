<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home','ProductController@index')->name('products.index');
Route::get('/products/create','ProductController@create')->name('products.create');
Route::post('/products/store','ProductController@store')->name('product.store');
Route::get('/products/{id}/edit','ProductController@edit')->name('product.edit');
Route::post('/products/update','ProductController@update')->name('product.update');
Route::get('/products/{id}/delete','ProductController@delete')->name('product.delete');
// Route::get('/products/invoice','ProductController@showFormData')->name('product.invoice');

///

Route::get('/products/pdf/{id}','ProductController@downloadPDF')->name('product.downloadPDF');

