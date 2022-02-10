<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use Livewire\Component;
use Spatie\MediaLibraryPro\Http\Livewire\Concerns\WithMedia;

class OptionsForm extends Component
{
    use WithMedia;

    public Event $event;
    
    public $mediaComponentNames = ['thumbnail'];

    public $thumbnail;

    protected $rules = [
        'event.registration_url'=> 'nullable|url',
        'event.tagline'         => 'nullable',
        'event.description'     => 'nullable',
        'event.video'           => 'nullable',
        'event.is_private'      => 'nullable',
        'event.is_recurrent'    => 'nullable',
        'event.default_registration_status' => 'nullable',
    ];

    public function save()
    {
        $this->validate();

        $this->event->save();
        
        $this->event->addFromMediaLibraryRequest($this->thumbnail)->toMediaCollection('events');
        
        session()->flash('success', 'Event saved successfully.');        

        $this->clearMedia();

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
