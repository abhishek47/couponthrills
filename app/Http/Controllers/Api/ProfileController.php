<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    	 $game = Game::where('access_token', $request->get('access_token'))->first();

    	if(isset($game)) {

	     if ($this->attemptLogin($request)) {
	        
	            return response(['status' => 'success'], 200);

	     } else {

	     		return response(['status' => 'failed'], 400); 	


	      }

	  } else {


	  	  return response(['error' => 'unauthorised'], 401);

	  }
    }
}
