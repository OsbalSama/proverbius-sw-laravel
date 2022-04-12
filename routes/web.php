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

//Client/Visitor Home
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
Route::get('/stores', 'HomeController@aboutUs')->name('global.aboutUs');
Route::get('/join-us', 'HomeController@JoinUsInfo')->name('global.JoinUs');
Route::get('/history', 'HomeController@clientHistory')->name('global.clientHistory');
Route::get('/help', 'HomeController@getHelp')->name('global.getHelp');


//view Profile
Route::get('/profile/{User}', 'HomeController@viewProfile')->name('public.accounts.profile');

//view Product by ADMIN or ROOT
Route::get('/{product}', 'HomeController@viewProductPage')->name('public.products.view');




//Admin/Partner Controlls
//mis Procuctos y Servicios
Route::get('{User}/products-and-services', 'userControlls@accountProducts')->name('account.products');

//USER ACCOUNTS MANAGEMENT
//index
Route::get('admin/all-accounts', 'accountController@index')->name('admin.accounts.all');

//create
Route::get('/accounts/new-account', 'accountController@create')->name('admin.accounts.create');
Route::post('/accounts/create-account', 'accountController@store')->name('admin.accounts.store');

//read

//update
Route::get('/account/{User}/edit', 'accountController@edit')->name('admin.accounts.edit');
Route::match(['put','patch'], '/account/{User}/update', 'accountController@update')->name('admin.accounts.update');

//show
Route::match(['put','patch'], 'account/{User}/show', 'accountController@showAccount')->name('admin.accounts.show');
//hide
Route::match(['put','patch'], 'account/{User}/hide', 'accountController@hideAccount')->name('admin.accounts.hide');

//show
Route::match(['put','patch'], 'account/{User}/lock', 'accountController@lockAccount')->name('admin.accounts.lock');
//hide
Route::match(['put','patch'], 'account/{User}/unlock', 'accountController@unlockAccount')->name('admin.accounts.unlock');


//delete
Route::delete('/all-accounts/account/{user}', 'accountController@delete')->name('admin.accounts.delete');



//PRODUCT & SERVICE MANAGEMENT
//Index
Route::get('admin/all-products', 'productController@index')->name('admin.products.all');

//create

//read


//update

//delete
Route::delete('/{product}/delete', 'productController@delete')->name('admin.products.delete');
