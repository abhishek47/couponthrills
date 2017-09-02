<?php

namespace App\Http\Controllers\Api;

use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CouponsController extends Controller
{
    public function all(Request $request)
    {
    	$coupons = Coupon::paginate(5);

    	foreach ($coupons as $key => $coupon) {
    		if($request->user()->coupons->contains($coupon->id))
    		{
    			$coupon->purchased = 1;
    		} else {
    			$coupon->purchased = 0;
    		}
    	}
    	
    	return response($coupons, 200);
    }

    public function search(Request $request)
    {
    	$coupons = Coupon::where('store_name', 'LIKE', '%' . $request->get('q') . '%')->get();
    	return response($coupons, 200);
    }



	 /**
	 * Redeem a coupon to user.
	 *
	 * @return \Illuminate\Http\Response
	 */
    public function redeem(Request $request)
    {
    	$coupon = Coupon::find($request->get('coupon_id'));

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

        foreach ($coupons as $key => $coupon) {
            if($request->user()->coupons->contains($coupon->id))
            {
                $coupon->purchased = 1;
            } else {
                $coupon->purchased = 0;
            }
        }

    	return response($coupons, 200);
    }


}
