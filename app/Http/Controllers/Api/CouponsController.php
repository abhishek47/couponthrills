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
    	return $coupons;
    }
}
