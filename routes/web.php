<?php

use Illuminate\Support\Facades\Route;

Route::post('gate', function() {
	if (request()->pass == 'improve2020')
		session(['goodtogo' => true]);

	return redirect(route('home'));
})->name('gate');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::post('language/{lang}/set', 'HomeController@setLanguage')->name('set-language');

Route::prefix('products')->name('products.')->group(function() {

	Route::get('', 'ProductsController@index')->name('index');

	Route::get('{product}', 'ProductsController@show')->name('show');

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
