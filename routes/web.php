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

Route::resource('types','TypeController');
Route::resource('group_types','GroupTypeController');
Route::resource('products','ProductController');
Route::resource('downloads','DownloadController');
Route::resource('softwares','SoftwareController');
Route::resource('faqs','FaqController');
Route::resource('accessories','AccessoryController');
Route::resource('groups','GroupController');
Route::resource('specs','SpecController');
Route::resource('logos','LogoController');
Route::resource('filters','FilterController');
Route::resource('product_specs','ProductSpecController');
Route::resource('pictures','PictureController');

Route::group(['prefix' => 'frontends'], function () {
    /*
	Route::get('products', function ()    {
        return view('frontends.products');
    });
	Route::get('product-detail', function ()    {
        return view('frontends.product-detail');
    });
	Route::get('compare', function ()    {
        return view('frontends.compares');
    });
	*/
	Route::get('products','FrontendController@getProducts');
	Route::get('product-detail/{id}','FrontendController@getProductDetail');
    Route::get('compare','FrontendController@getCompare');
});
