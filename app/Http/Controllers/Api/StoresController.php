<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use App\Models\Store;
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
    	$category = Category::find(request()->get('category'));

    	$stores = $category->stores;

    	return response($stores, 200);

    }
}
