<?php

namespace App\Http\Livewire\Catalogue;

use Livewire\Component;

class EventsFilters extends Component
{
    public $city;
    public $style;
    public $type;       

    public function updatedCity($v)
    {
        $this->city = $v;
        $this->emit('cityEventUpdated', $this->city);
    }

    public function updatedStyle($v)
    {
        $this->style = $v;
        $this->emit('styleEventUpdated', $this->style);
    }

    public function updatedType($v)
    {
        $this->type = $v;
        $this->emit('levelEventUpdated', $this->level);
    }

    public function render()
    {
        return view('livewire.catalogue.events-filters');
    }
}



