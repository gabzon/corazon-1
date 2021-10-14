<?php

namespace App\Http\Livewire\Shared;

use App\Models\Price;
use Livewire\Component;

class PriceForm extends Component
{
    public $pricing;
    
    protected $rules = [
        'pricing.price'         => 'required',
        'pricing.label'         => 'required',
        'pricing.currency'      => 'required',
        'pricing.description'   => 'nullable',
        'pricing.can_expire'    => 'nullable',
        'pricing.expiry_date'   => 'nullable',
        'pricing.priceable'     => 'required',        
    ];

    // public function save()
    // {
    //     $this->validate();
        
    //     $this->pricing->save();
    // }

    public function add()
    {
        dd($this->pricing);
    }
    
    public function mount($pricing = null)
    {
        // if ($pricing->exists) {
        //     $this->pricing = $pricing;
        // } else {
        //     $this->pricing = new Price;
        //     $this->pricing->currency = '';
        // }
    }
    
    public function render()
    {
        return view('livewire.shared.price-form');
    }
}
