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
Route::get('about/mobile', 'PagesController@aboutMobile');
Route::get('contact', 'PagesController@contact');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/coupons', 'HomeController@coupons')->name('user.coupons');

Route::post('/profile', 'HomeController@update')->name('profile.update');
Route::post('/profile/password', 'HomeController@updatePassword')->name('profile.password');

Route::get('coupons', 'CouponsController@index');
Route::get('coupons/{coupon}/redeem', 'CouponsController@redeem');


Route::get('stores', 'StoresController@index');


Route::get('earn', 'HomeController@earn');


Route::post('/buy/tokens', 'PaymentsController@makePayment');
Route::get('/payments/response', 'PaymentsController@response');
Route::get('/payments/cancel', 'PaymentsController@cancel');

Route::post('/tokens/add', 'TokensController@store');


// Games

Route::get('/games/tic-tac-toe', 'TicTacController@index');
Route::get('/games/spinner', 'SpinnerController@index');

Route::get('/js/wheel', 'SpinnerController@index');



Route::post('/refer', 'ReferalsController@store');



Route::get('/quiz', 'QuizzesController@index');
Route::get('/quiz/random', 'QuizzesController@random');
Route::get('/quiz/{quiz}', 'QuizzesController@show');

