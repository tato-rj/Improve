<?php

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

Route::post('gate', function() {
	if (request()->pass == 'improve2020')
		session(['goodtogo' => true]);

	return redirect(route('home'));
})->name('gate');

Route::get('/', function () {
	if (app()->environment('local') || session()->has('goodtogo'))
	    return view('welcome.index');

	return view('gate');
})->name('home');
