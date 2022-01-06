<?php

namespace App\Http\Livewire\Catalogue;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class Events extends Component
{
    use WithPagination;
    public $city;
    public $style = '';
    public $type = '';

    protected $listeners = [
        'cityEventUpdated'   => 'updateCity', 
        'styleEventUpdated'  => 'updateStyle',
        'typeEventUpdated'   => 'updateType',
    ];
    
    public function updateCity($city)
    {        
        $this->city = $city;        
    }

    public function updateStyle($style)
    {
        $this->style = $style;     
    }
    
    public function updateType($type)
    {                
        $this->type = $type;        
    }

    public function render()
    {
        return view('livewire.catalogue.events', [
            'events' => Event::IsActive()->withFilters($this->city, $this->style, $this->type)                                
                                ->orderBy('start_date','asc')                                
                                ->paginate(20)
        ]);
    }
}