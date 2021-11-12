<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use Livewire\Component;

class OptionsForm extends Component
{
    public Event $event;

    protected $rules = [
        'event.tagline'         => 'nullable',
        'event.description'     => 'nullable',
        'event.video'           => 'nullable',
    ];

    public function save()
    {                   
        $this->validate();
        
        $this->event->save();

        session()->flash('success', 'Event saved successfully.');        
    }

    public function mount($event)
    {
        if ($event->exists) {
            $this->event = $event;            
        }  
    }

    public function render()
    {
        return view('livewire.event.options-form');
    }
}
