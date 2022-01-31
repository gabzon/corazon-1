<?php

namespace App\Http\Livewire\Catalogue;

use App\Models\City;
use App\Models\Event;
use App\Models\Style;
use Livewire\Component;
use Livewire\WithPagination;

class EventsCatalogue extends Component
{
    use WithPagination;
        
    public $city;
    public $styleId ;
    public $type;

    public $cities;
    public $styles;
    public $readyToLoad = false;

    public function loadEvents()
    {
        $this->readyToLoad = true;
    }

    public function updating($name, $value)
    {
        $this->resetPage();
    }

    public function resetCatalog()
    {
        $this->city = null;
        $this->styleId = null;
        $this->level = null;        
    }

    public function mount($city = null, $type = null)
    {
        $this->city = $city;
        $this->type = $type;
    }

    public function render()
    {      
        $this->cities = City::has('events')->orderBy('name','asc')->get();
        $this->styles = Style::has('events')->orderBy('name','asc')->get();
        
        $events = Event::with(['city:id,name','location', 'media'])
                        ->isActive()
                        ->inCity($this->city)
                        ->style($this->styleId)
                        ->type($this->type)
                        ->orderBy('start_date', 'asc')
                        ->latest();
        
        $emptyEvents = Event::whereType('xxxx');

        return view('livewire.catalogue.events-catalogue', [
            'events' => $this->readyToLoad ? $events->paginate(20) : $emptyEvents->paginate(2)
        ]);
    }
}

