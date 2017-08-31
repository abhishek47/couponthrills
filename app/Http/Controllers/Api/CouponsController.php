<?php

namespace App\Http\Controllers\Api;

use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CouponsController extends Controller
{
    public function all()
    {
    	$coupons = Coupon::all();
    	return response($coupons, 200);
    }


	 /**
	 * Redeem a coupon to user.
	 *
	 * @return \Illuminate\Http\Response
	 */
    public function redeem(Request $request, Coupon $coupon)
    {
        if($request->user()->tokens >= $coupon->tokens) {


        $request->user()->tokens = $request->user()->tokens - $coupon->tokens;
        $request->user()->save(); 

        $request->user()->coupons()->attach($coupon);

        return response(['success'], 200);
        
	    } else {
	        return response(['You don\'t have enough tokens'], 500);
	    }

    }


    public function userCoupons(Request $request)
    {
    	$coupons = $request->user()->coupons;

    	return response($coupons, 200);
    }


}
