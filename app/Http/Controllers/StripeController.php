<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function checkout(Request $request)
    {
        $amount = $request->amount * 100;
        $payment = auth()->user()->pay($amount);            
        ->client_secret;            
        $payment = $request->user()->pay(100);
        return $payment;        
    }
}






