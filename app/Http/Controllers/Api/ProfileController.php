<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
	use AuthenticatesUsers;

    public function update(Request $request)
    {
    	$request->user()->name = $request->get('name');
    	$request->user()->email = $request->get('email');
    	$request->user()->save();

    	return response($request->user(), 200);
    }

    public function exists(Request $request)
    {
    	  //$this->validateLogin($request);

	     if ($this->attemptLogin($request)) {
	        
	            return response(['success'], 200);

	     } else {

	     		return response(['failed'], 400); 	


	      }
    }
}
