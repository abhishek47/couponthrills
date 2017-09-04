<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Models\Game;
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

    public function transfer(Request $request)
    {
    	$game = Game::where('access_token', $request->get('access_token'))->first();

    	if(isset($game)) {
	    
	    	 $user = User::where('email', $request->get('email'))->first();

	    	 if(!$user) {
	    
	    	 	return response(['status' => 'User not found'], 400);	
	    
	    	 } else {
	    
	         	$tokens = $request->get('tokens'); 
	    	    $user->tokens += $tokens;
	            $user->save();
	            return response(['status' => "success"], 200); 
	    
	    	 }
    	
    	 } else {
    	
    	 	return response(['error' => 'unauthorised', 401]);
    	
    	 }

    	 
    }
}
