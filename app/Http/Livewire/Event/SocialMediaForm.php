<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use Livewire\Component;

class SocialMediaForm extends Component
{
    public Event $event;    

    protected $rules = [
        'event.website'     => 'nullable|url',
        'event.facebook'    => 'nullable|url',
        'event.twitter'     => 'nullable|url',
        'event.youtube'     => 'nullable|url',
        'event.instagram'   => 'nullable|url',
        'event.tiktok'      => 'nullable|url',
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
        return view('livewire.event.social-media-form');
    }
}