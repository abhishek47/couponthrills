<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Softon\Indipay\Facades\Indipay; 


class PaymentsController extends Controller
{
     public function makePayment(Request $request)
	 { 
	 	$tokens = $request->get('tokens');
	 	$amount = $tokens * 2;
      $parameters = [
      
        'tid' => '1233221223322',
        
        'order_id' => '1232212',
        
        'amount' => $amount,
        'purpose' => 'Buy ' . $tokens . ' Tokens',
        'buyer_name' => \Auth::user()->name,
        'email' => \Auth::user()->email,
        'phone' => '9922367414',
        
      ];
      
      // gateway = CCAvenue / PayUMoney / EBS / Citrus / InstaMojo
      
      $order = Indipay::prepare($parameters);
      return Indipay::process($order);
	 }
     
     public function response(Request $request)
     {
     	 // For default Gateway
        $response = Indipay::response($request);
        if($response->success){
        
        $tokens = $response->payment_request->amount / 2;
        \Auth::user()->tokens += $tokens;
        \Auth::user()->save();
         
        $payment = $response->payment_request;
        \Auth::user()->payments()->create(['payment_id' => $payment->id, 'amount' => $payment->amount]);
        
        flash("Payment was Successfull! <b>$tokens</b> Tokens were added to your profile!")->success(); 
         
        return redirect('/home');
 
        } else {
           flash('Payment failed! There was some problem with the payment!Please try again!')->error(); 
         
           return redirect('/home');
        }
     }
}
