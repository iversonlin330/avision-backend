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

Route::post('/product/uploadFile','ProductController@upload');
Route::post('/product/uploadFile&responseType=json','ProductController@upload');

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
    Route::get('group_type','FrontendController@getGroupType');
    Route::get('download','FrontendController@getDownload');
    Route::get('faq','FrontendController@getFaq');
	Route::get('software-download/{id}','FrontendController@getSoftwareDownload');
	Route::get('download-download/{id}','FrontendController@getDownloadDownload');
	Route::get('ajax-product','FrontendController@getAjaxProduct');
	Route::get('header',function(){
		return view('layouts.header');
	});
	Route::get('footer',function(){
		return view('layouts.footer');
	});
});
