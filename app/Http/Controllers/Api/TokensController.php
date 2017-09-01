<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TokensController extends Controller
{
    public function purchase(Request $request)
    {
    	 $tokens = $request->get('tokens'); 
    	 $request->user()->tokens += $tokens;
        $request->user()->save();
    }
}
