<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokensController extends Controller
{
    public function store()
    {
    	\Auth::user()->tokens += request('tokens');
        \Auth::user()->save();

        return response(['success'], 200);
    }
}
