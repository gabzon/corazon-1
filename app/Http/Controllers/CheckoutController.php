<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function pay(Request $request)
    {                           
        $product = Product::findOrFail($request->pid);
        
        // Check if available
        if ($product->hasReachedAvailabilityLimit()) {
            session()->flash('warning','Sorry it seems this item is no longer available');            
            return redirect()->back();
        }

        // Check current time with product deadlne. if product expires go back and say sorry        
        if ($product->hasExpired()) {
            session()->flash('warning','Sorry it seems this item is no longer available');
            return redirect()->back();
        }


        // if deadline ok, then proceed to payment
        $amount = $product->promo_price * 100;
        $payment = auth()->user()->pay($amount);
            
        return view('checkout.pay', [
            'payment'   => $payment,
            'product'   => $product            
        ]);
    }

    public function purchase(Request $request)
    {                
        $product = Product::findOrFail($request->pid);        
        
        if (!isset($product->ordered)) {            
            $product->ordered = 1;
        } else {                        
            $product->ordered = $product->ordered + 1;
        }

        $product->save();
        
        session()->flash('success','Payment Successfully!');
        return redirect('/dashboard');
    }
}