<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use Livewire\Component;

class PriceForm extends Component
{
    public Event $event;        

    protected $rules = [
        'event.is_free' => 'nullable',
    ];

    public function save()
    {                   
        $this->validate();
        
        $this->event->save();

        session()->flash('success', 'Event price saved successfully.');        
    }

    public function mount($event)
    {
        if ($event->exists) {
            $this->event = $event;            
        }  
    }

    public function render()
    {
        return view('livewire.event.price-form');
    }
}
