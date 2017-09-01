<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
    	$request->user()->name = $request->get('name');
    	$request->user()->email = $request->get('email');
    	$request->user()->save();

    	return response($request->user(), 200);
    }
}
