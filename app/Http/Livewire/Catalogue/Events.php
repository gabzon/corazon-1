<?php

namespace App\Http\Livewire\Catalogue;

use App\Models\Event;
use Livewire\Component;

class Events extends Component
{
    public function render()
    {
        return view('livewire.catalogue.events', [
            'events' => Event::all()
        ]);
    }
}

