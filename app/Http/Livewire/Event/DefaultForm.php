<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use Illuminate\Support\Str;
use Livewire\Component;

class DefaultForm extends Component
{    
    public Event $event;
    public $styles;

    protected $listeners = ['selectedStyles' => 'updateStyles'];

    protected $rules = [
        'event.name'            => 'required',
        'event.slug'            => 'required',
        'event.start_date'      => 'required',
        'event.start_time'      => 'nullable',
        'event.end_date'        => 'required',
        'event.end_time'        => 'nullable',
        'event.type'            => 'required',
        'event.status'          => 'required',
        'event.user_id'         => 'nullable',
        'event.location_id'     => 'nullable',
        'event.city_id'         => 'required',
    ];

    public function updateStyles($styles)
    {
        $this->styles = $styles;
    }

    public function save()
    {           
        $this->validate();
        
        $this->event->user_id = auth()->user()->id;

        if ($this->styles) {            
            $this->event->styles()->sync($this->styles);
        }

        $this->event->save();

        session()->flash('success', 'Event saved successfully.');        
    }

    public function updatedEventName()
    {
        $this->event->slug = Str::slug($this->event->name, '-') . '-' . \Carbon\Carbon::now()->timestamp;        
    }

    public function mount($event)
    {
        if ($event->exists) {
            $this->event = $event;            
        }  
    }

    public function render()
    {
        return view('livewire.event.default-form');
    }
}


