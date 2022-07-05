<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use Livewire\Component;

class OptionsForm extends Component
{
    public Event $event;

    protected $rules = [
        'event.registration_url'=> 'nullable|url',
        'event.public'          => 'required',
        'event.tagline'         => 'nullable',
        'event.description'     => 'nullable',        
        'event.is_private'      => 'nullable',
        'event.is_recurrent'    => 'nullable',
        'event.default_registration_status' => 'nullable',
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
            $this->event->is_private = $event->is_private ?? false;
            $this->event->is_recurrent = $event->is_recurrent ?? false;
        }
    }

    public function render()
    {
        return view('livewire.event.options-form');
    }
}
