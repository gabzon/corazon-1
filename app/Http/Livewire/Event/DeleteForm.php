<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use Livewire\Component;

class DeleteForm extends Component
{   
    public Event $event;

    public function delete()
    {
        
        $this->event->delete();

        session()->flash('success', 'Event deleted successfully.');

        return redirect()->route('event.index');
    }

    public function mount($event)
    {
        if ($event->exists) {
            $this->event = $event;            
        }  
    }

    public function render()
    {
        return view('livewire.event.delete-form');
    }
}
