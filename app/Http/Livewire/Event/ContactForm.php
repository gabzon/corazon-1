<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use Livewire\Component;

class ContactForm extends Component
{
    public Event $event;
    
    protected $listeners = ['selectedOrganizations' => 'updateOrganizations'];
     
    public $organizations;

    protected $rules = [
        'event.contact' => 'nullable|string|min:3|max:30',
        'event.email'   => 'nullable|email',
        'event.phone'   => 'nullable|string|min:5|max:16',
    ];

    public function save()
    {                   
        $this->validate();
        
        $this->event->save();

        if ($this->organizations) {
            $this->event->organizations()->sync($this->organizations);
        }

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
        return view('livewire.event.contact-form');
    }
}


