<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpinnerController extends Controller
{
    public function index()
    {
    	return view('games.spinner.index');
    }
}
