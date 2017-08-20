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

Route::get('/productlist', 'PublicPagesController@productlist')->name('productlist');



Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/wish', 'PagesController@wishlist')->name('wish');
Route::get('/myaccount', 'PagesController@myaccount')->name('myaccount');


Route::get('/Brands', 'PagesController@Brands')->name('Brands');
Route::get('/Categories', 'PagesController@Categories')->name('Categories');
Route::get('/Items', 'PagesController@Items')->name('Items');
Route::get('/Customers', 'PagesController@Customers')->name('Customers');


Route::get('/CBrands', 'PagesController@CBrands')->name('CBrands');
Route::POST('/SBrands', 'PagesController@SBrands')->name('SBrands');




 
