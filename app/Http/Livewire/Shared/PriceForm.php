<?php

namespace App\Http\Livewire\Shared;

use App\Models\Event;
use App\Models\Price;
use Livewire\Component;

class PriceForm extends Component
{
    public Price $price;
    public $pricing;
    public string $modelName;
    public $model;
    public bool $showForm;
    
    protected $rules = [
        'price.amount'         => 'required',
        'price.label'         => 'required',
        'price.currency'      => 'required',
        'price.description'   => 'nullable',
        'price.can_expire'    => 'nullable',
        'price.expiry_date'   => 'nullable',         
    ];

    public function save()
    {        
        $this->validate();       

        $this->model->prices()->save($this->price);     
        
        session()->flash('success', 'Price successfully added!');
        
        $this->showForm = false;   
        $this->loadPricing();             
    }

    public function delete(Price $price)
    {
        $price->delete();
        $this->loadPricing();
    }

    public function cancel()
    {        
        $this->showForm = false;
    }

    public function add()
    {                
        $this->price = new Price;   
        $this->showForm = true;
    }

    public function edit(Price $price)
    {     
        $this->showForm = true;        
        $this->price = $price;        
    }

    public function loadPricing()
    {        
        // $type = "App\Models" . $this->modelName;
        $this->pricing = Price::where('priceable_id', $this->model->id)
                                ->where('priceable_type',get_class($this->model))->get();        
        
    }
    
    public function mount($model, string $modelName)
    {
        $this->model = $model;
        $this->modelName = $modelName;
        $this->loadPricing();
            
    }
    
    public function render()
    {
        return view('livewire.shared.price-form');
    }
}
