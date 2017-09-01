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
    return response($request->user(), 200);
});

 Route::post('register', 'Auth\RegisterController@register');
 Route::post('login', 'Auth\LoginController@login');
 Route::post('logout', 'Auth\LoginController@logout');

Route::group(['middleware' => 'auth:api'], function() {
  Route::get('coupons/all', 'Api\CouponsController@all');	
  Route::post('coupons/redeem', 'Api\CouponsController@redeem');
  Route::get('coupons/purchased', 'Api\CouponsController@userCoupons');
  Route::get('stores/categories', 'Api\StoresController@categories');
  Route::get('stores', 'Api\StoresController@stores');

  Route::post('tokens/purchase', 'Api\TokensController@purchase');	
  


 
});