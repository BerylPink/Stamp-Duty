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


Route::resource('/individual-account',              'IndividualAccountController');

// Route::resource('/corporate-account',               'CorporateAccountController');

Route::resource('/transac-individual',              'TransacIndividualController');

Route::resource('/verification',                    'VerificationController');

// Route::group(['middleware' => ['iaUserType']], function(){
//     Route::get('/individual/dashboard',             'DashboardController@indvidualDashboard')->name('ia.dashboard');
// });

// Route::group(['middleware' => ['caUserType']], function(){
//     Route::get('/corporate/dashboard',              'DashboardController@corporateDashboard')->name('ca.dashboard');
// });


Route::get('contact', 'ContactController@show')->name('contact');
Route::post('contact', 'ContactController@mail')->name('contact');

Route::view('/assessment',                               'assessments')->name('assessment');

Route::view('/certificate',                               'certificate')->name('certificate');

Route::view('/invoice',                               'invoice')->name('invoice');