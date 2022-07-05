<?php

namespace App\View\Components\Stripe;

use Illuminate\View\Component;

class PaymentForm extends Component
{
    public $payment;
    public $amount;
    public $product;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($payment, $amount = null, $product = null)
    {
        $this->payment = $payment;
        $this->amount = $amount;
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {     
        return view('components.stripe.payment-form');             
    }
}
