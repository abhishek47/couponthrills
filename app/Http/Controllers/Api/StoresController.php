<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoresController extends Controller
{
    public function categories()
    {
    	 $categories = Category::all();

    	 return response($categories, 200);
    }

    public function stores(Request $request)
    {
    	$category = Category::find(request()->get('cat'));

    	$stores = $category->stores;

    	return response($stores, 200);

    }
}
