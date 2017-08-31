<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

 Route::post('register', 'Auth\RegisterController@register');
 Route::post('login', 'Auth\LoginController@login');
 Route::post('logout', 'Auth\LoginController@logout');

Route::group(['middleware' => 'auth:api'], function() {
  Route::get('coupons/all', 'Api\CouponsController@all');	
  Route::post('coupons/{coupon}/redeem', 'Api\CouponsController@redeem');
  Route::get('coupons/purchased', 'Api\CouponsController@userCoupons');
  Route::get('user/tokens', function(){
  	return $request->user()->tokens;
  });
 
});