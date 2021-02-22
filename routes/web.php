<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('contact', 'HomeController@contact')->name('contact');

Route::post('language/{lang}/set', 'HomeController@setLanguage')->name('set-language');

Route::prefix('products')->name('products.')->group(function() {

	Route::get('', 'ProductsController@index')->name('index');

	Route::get('{product}', 'ProductsController@show')->name('show');

});

Route::prefix('what-we-do')->name('what-we-do.')->group(function() {

	Route::get('health', 'HomeController@health')->name('health');

	Route::get('performance', 'HomeController@performance')->name('performance');

	Route::get('development', 'HomeController@development')->name('development');

});

Route::prefix('admin')->middleware('auth')->group(function() {

	Route::get('', 'AdminController@index')->name('admin');

	Route::prefix('products')->name('products.')->group(function() {

		Route::get('create', 'ProductsController@create')->name('create');

		Route::get('{product}/edit', 'ProductsController@edit')->name('edit');

		Route::patch('{product}', 'ProductsController@update')->name('update');

		Route::delete('{product}', 'ProductsController@destroy')->name('destroy');

		Route::post('', 'ProductsController@store')->name('store');

	});

});
