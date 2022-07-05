<?php

namespace App\Http\Livewire\Stripe;

use Livewire\Component;

class StripeElement extends Component
{
    public String $clientSecret;
    
    public function mount($clientSecret)
    {
        $this->clientSecret = $clientSecret;
    }

    public function render()
    {
        if ($this->clientSecret) {            
            return view('livewire.stripe.stripe-element');
        }
    }
}
