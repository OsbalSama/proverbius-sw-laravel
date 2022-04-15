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
Route::get('/our-partners', 'HomeController@ourPartners')->name('global.partners');

Route::get('/technologies', 'HomeController@Technologies')->name('global.technologies');
Route::get('/movile-apps', 'HomeController@movileApps')->name('global.movile-apps');
Route::get('/web-services', 'HomeController@webServices')->name('global.web-services');

Route::get('/industry', 'HomeController@Industry')->name('global.industry');
Route::get('/catering-and-restaurants', 'HomeController@Restaurants')->name('global.restaurants');
// Route::get('/sightseeing', 'HomeController@Sightseeing')->name('global.sightseeing');
Route::get('/for-business', 'HomeController@business')->name('global.business');
Route::get('/e-commerce', 'HomeController@ECommerce')->name('global.e-commerce');

Route::get('/other-cats', 'HomeController@otherCats')->name('global.oher-cats');

Route::get('/products-and-services', 'HomeController@publicProducts')->name('global.publicProducts');
Route::get('/about-us', 'HomeController@aboutUs')->name('global.aboutUs');
Route::get('/join-us', 'HomeController@JoinUsInfo')->name('global.JoinUs');
// Route::get('/history', 'HomeController@clientHistory')->name('global.clientHistory');
Route::get('/het-help', 'HomeController@getHelp')->name('global.getHelp');


//view Profile
Route::get('/profile/{User}', 'HomeController@accountProfile')->name('public.accounts.profile');

//Profile Info
Route::get('profile/{User}/account-info', 'HomeController@accountInfo')->name('account.info');

//Update Profile Info
Route::get('profile/{User}/account-info/edit', 'accountController@editAccountInfo')->name('account.info.edit');
Route::match(['put', 'patch'], 'profile/{User}/account-info/update', 'accountController@updateAccountInfo')->name('account.info.update');

//Profile Items Liked
Route::get('profile/{User}/account-likes', 'HomeController@accountLikes')->name('account.likes');

//Profile Suscriptions
Route::get('profile/{User}/account-suscriptions', 'HomeController@accountSuscriptions')->name('account.suscriptions');

//Profile Procuctos y Servicios
Route::get('profile/{User}/products-and-services', 'HomeController@accountProducts')->name('account.products');

//Profile create Procuctos y Servicios
Route::get('{User}/create-product-service', 'accountController@createProductService')->name('account.product.create');
Route::post('{User}/sstore-product-service', 'accountController@storeProductService')->name('account.product.store');

//view Product by ADMIN or ROOT
Route::get('/{product}', 'HomeController@viewProductPage')->name('public.product.view');




//Admin/Partner Controlls

//USER ACCOUNTS MANAGEMENT
//index
Route::get('admin/all-accounts', 'adminControlls@index')->name('admin.accounts.all');

//create
Route::get('/accounts/new-account', 'adminControlls@createUser')->name('admin.accounts.create');
Route::post('/accounts/create-account', 'adminControlls@storeUser')->name('admin.accounts.store');

//read

//update
Route::get('/account/{User}/edit', 'adminControlls@editUser')->name('admin.accounts.edit');
Route::match(['put', 'patch'], '/account/{User}/update', 'adminControlls@updateUser')->name('admin.accounts.update');

//show
Route::match(['put', 'patch'], 'account/{User}/show', 'adminControlls@showAccount')->name('admin.accounts.show');
//hide
Route::match(['put', 'patch'], 'account/{User}/hide', 'adminControlls@hideAccount')->name('admin.accounts.hide');

//show
Route::match(['put', 'patch'], 'account/{User}/lock', 'adminControlls@lockAccount')->name('admin.accounts.lock');
//hide
Route::match(['put', 'patch'], 'account/{User}/unlock', 'adminControlls@unlockAccount')->name('admin.accounts.unlock');


//delete
Route::delete('/all-accounts/account/{user}', 'adminControlls@deleteUser')->name('admin.accounts.delete');



//PRODUCT & SERVICE MANAGEMENT
//Index
Route::get('admin/all-products', 'productController@index')->name('admin.products.all');

//create

//read


//update

//delete
Route::delete('/{product}/delete', 'productController@delete')->name('admin.products.delete');
