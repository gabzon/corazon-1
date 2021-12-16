<?php

namespace App\Http\Livewire\Shared;

use App\Models\Event;
use Livewire\Component;

class RegistrationButton extends Component
{
    public Event $event;
    
    public function mount(Event $event)
    {
        $this->event = $event;
    }

    public function render()
    {
        return view('livewire.shared.registration-button');
    }
}