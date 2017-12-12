<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index()
    {
    	$page = 'home'; 
    	$coupons = Coupon::limit(6)->get();
    	return view('pages.index', compact('coupons', 'page'));
    }

    public function about()
    {
    	$page = 'about';
    	return view('pages.about', compact('page'));
    }

     public function aboutMobile()
    {
        $page = 'about';
        return view('pages.aboutMobile', compact('page'));
    }

    public function contact()
    {
    	$page = 'contact';
    	return view('pages.contact', compact('page'));
    }

    

}
