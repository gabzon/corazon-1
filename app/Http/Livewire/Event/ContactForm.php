<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use App\Models\Organization;
use Livewire\Component;

class ContactForm extends Component
{
    public Event $event;
    public int $oid = 0;
    
    // protected $listeners = ['selectedOrganizations' => 'updateOrganizations'];
     
    public $organizations;

    protected $rules = [
        'event.contact' => 'nullable|string|min:3|max:30',
        'event.email'   => 'nullable|email',
        'event.phone'   => 'nullable|string|min:5|max:16',        
    ];
    
    public function updateOrganizations($organizations)
    {
        $this->organizations = $organizations;
    }

    // public function updatedOid($value)
    // {
    //     dd($value);
    //     $this->oid = $value;
    // }

    public function addOrganization()
    {
        if ($this->oid == 0) {
            session()->flash('warning','Please select organization!');
            return;
        }

        $this->event->organizations()->attach($this->oid);
        $this->loadOrganizations();
        $this->oid = 0;
    }

    public function remove($oid)
    {        
        $this->event->organizations()->detach($oid);
        $this->loadOrganizations();
    }

    public function save()
    {                   
        $this->validate();
        
        $this->event->save();

        if ($this->organizations) {
            $this->event->organizations()->sync($this->organizations);
        }

        session()->flash('success', 'Event saved successfully.');        
    }

    public function loadOrganizations()
    {
        $event = Event::with('organizations')->findOrFail($this->event->id);
        $this->organizations = $event->organizations;
    }

    public function mount($event)
    {
        if ($event->exists) {
            $this->event = $event;            
        }  
        $this->loadOrganizations();
    }

    public function render()
    {                
        return view('livewire.event.contact-form');
    }
}


