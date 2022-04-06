<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

//General Views
Route::get('/top-products-services', 'HomeController@topProdsServs')->name('global.top-prod-servs');
Route::get('/top-partners', 'HomeController@topPartners')->name('global.top-partners');
Route::get('/best-shops', 'HomeController@bestShops')->name('global.best-shops');

Route::get('/technologies', 'HomeController@Technologies')->name('global.technologies');
Route::get('/movile-apps', 'HomeController@movileApps')->name('global.movile-apps');
Route::get('/web-services', 'HomeController@webServices')->name('global.web-services');

Route::get('/industry', 'HomeController@Industry')->name('global.industry');
Route::get('/restaurants', 'HomeController@Restaurants')->name('global.restaurants');
Route::get('/sightseeing', 'HomeController@Sightseeing')->name('global.sightseeing');
Route::get('/e-commerce', 'HomeController@ECommerce')->name('global.e-commerce');

Route::get('/other-cats', 'HomeController@otherCats')->name('global.oher-cats');

Route::get('/products', 'HomeController@publicProducts')->name('global.publicProducts');
Route::get('/services', 'HomeController@publicServices')->name('global.publicServices');
Route::get('/stores', 'HomeController@publicStores')->name('global.publicStores');
Route::get('/join-us', 'HomeController@JoinUsInfo')->name('global.JoinUs');
Route::get('/history', 'HomeController@clientHistory')->name('global.clientHistory');
Route::get('/help', 'HomeController@getHelp')->name('global.getHelp');


//Account Management
Route::get('/all-accounts', 'accountController@index')->name('admin.all-accounts');

//Product Management
Route::get('/all-products', 'productController@index')->name('admin.all-products');

//Services Management
Route::get('/all-services', 'serviceController@index')->name('admin.all-services');

//Stores Management
Route::get('/all-stores', 'storeController@index')->name('admin.all-stores');

