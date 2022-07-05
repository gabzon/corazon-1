<?php

namespace App\Http\Livewire\Stripe;

use App\Models\Product;
use Exception;
use Livewire\Component;
use Stripe;

class PaymentForm extends Component
{
    public Product $public;
    protected $payment;
    public bool $ready = false;
    protected $listeners = ['initialization' => 'pay'];

    public function checkout()
    {   
        $this->ready = true;
        $this->getPaymentIntent();                                       
    }

    public function mount(Product $product)
    {
        $this->product = $product;
    }

    public function getPaymentIntent()
    {
        $amount = $this->product->promo_price * 100;
        $this->payment = auth()->user()->pay($amount);            
        return $this->payment->client_secret;     
    }

    public function render()
    {        
        return view('livewire.stripe.payment-form', [
            'clientSecret' => $this->getPaymentIntent()
        ]);
    }
}

