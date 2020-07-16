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


Route::view('/',                                    'home')->name('home');
Route::view('/about',                               'about')->name('about');
// Route::get('/contact',                             'contact')->name('contact');
Route::get('/create-individual-account',            'IndividualAccountController@index')->name('individual-reg');
// Route::get('/create-corporate-account',             'CorporateAccountController@index')->name('corporate-reg');

Route::get('/login',                                'Auth\LoginController@index')->name('login');
Route::get('/logout',                               'Auth\LoginController@logout')->name('logout');
Route::post('/verify-credentials',                  'Auth\LoginController@verifyCredentials')->name('verify.credentials');
// Route::get('/auth-check',                           'AuthCheckController@redirectAfterAuth')->name('auth.check');
Route::post('/create-account',                      'RegisterController@store')->name('create.user');

Route::resource('/assessments',                     'AssessmentController');

Route::resource('/individual-account',              'IndividualAccountController');

// Route::resource('/corporate-account',               'CorporateAccountController');

Route::resource('/transac-individual',              'TransacIndividualController');

Route::resource('/verification',                    'VerificationController');

Route::resource('/stamp-duty-history',              'StampDutyHistoryController');

Route::get('contact-us', 'ContactController@show')->name('contact-us');
Route::post('contact', 'ContactController@mail');

Route::get('/stamp-duty-certificate/{id}',          'StampDutyHistoryController@edit')->name('certificate');

Route::get('/stamp-duty-invoice/{id}',              'StampDutyHistoryController@show')->name('invoice');