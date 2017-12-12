<?php

namespace App\Http\Controllers;

use App\Mail\ReferalEmail;
use App\Models\Referal;
use Illuminate\Http\Request;

class ReferalsController extends Controller
{
    public function store()
    {  	
    	$emails = trim(request('emails'));
    	$emails = explode(',', $emails);


    	foreach($emails as $email)
    	{
    		$to = trim($email);

    		\Mail::to($to)->send(new ReferalEmail());

    	}

    	flash("Invitation mails successfully sent!")->success();

    	return back();
    }
}
