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

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');;

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('verification', function () {
    return view('verification');
})->name('verification');;

Route::get('/individual-reg', function () {
    return view('individual-reg');
})->name('individual-reg');;

Route::get('/corporate-reg', function () {
    return view('corporate-reg');
})->name('corporate-reg');;

Route::get('/transac-individual', function () {
    return view('transac-individual');
})->name('transac-individual');;

Route::get('/transac-bulk', function () {
    return view('transac-bulk');
})->name('transac-bulk');;

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
