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
