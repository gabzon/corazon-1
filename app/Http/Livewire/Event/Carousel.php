<?php

namespace App\Http\Livewire\Event;

use App\Models\City;
use App\Models\Event;
use Livewire\Component;

class Carousel extends Component
{
    public $collection;
    public City $city;
    
    public function mount($collection = null, City $city = null)
    {
        if ($city->exists) {
            $this->city = $city;            
        }

        if ($collection != null) {
            $this->collection = $collection;    
        } else {            
            $this->collection = Event::isActive()->inCity($city->id ?? null)->get();                       
        }
        
    }

    public function render()
    {
        return view('livewire.event.carousel');
    }
}
