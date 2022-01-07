<?php

namespace App\Http\Livewire\Catalogue;

use App\Models\Event;
use Livewire\Component;

class EventCard extends Component
{
    public Event $event;
    
    public function mount(Event $event)
    {
        $this->event = $event;
    }

    public function render()
    {
        return view('livewire.catalogue.event-card');
    }
}
