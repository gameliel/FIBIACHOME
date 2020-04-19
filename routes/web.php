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

Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('faq', 'PagesController@faq');
Route::get('pricing', 'PagesController@pricing');
Route::get('submit', 'PagesController@submit');
Route::resource('/contact', 'ContactController', ['except' => ['show','create', 'index', 'update', 'edit', 'destroy']]);
Route::resource('/propertylisting', 'PropertyListingController');