<?php

namespace App\Http\Livewire\Catalogue;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class EventsCatalogue extends Component
{
    use WithPagination;
    
    // public $style = 0;
    public $styleId ;
    public $city;
    public $type;


    public function updating($name, $value)
    {
        $this->resetPage();
    }

    public function mount($city = null)
    {
        $this->city = $city;
    }

    public function render()
    {      
        $events = Event::with(['city:id,name'])
                        ->isActive()
                        ->inCity($this->city)
                        ->style($this->styleId)
                        ->type($this->type)
                        ->orderBy('start_date', 'asc')
                        ->latest();
        
        return view('livewire.catalogue.events-catalogue', [
            'events' => $events->paginate(20) 
        ]);
    }
}

