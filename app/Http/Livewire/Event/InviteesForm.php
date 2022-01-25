<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use App\Models\User;
use Livewire\Component;

class InviteesForm extends Component
{
    public Event $event;    

    protected $listeners = ['instructorToOrganization' => 'addInvitee'];

    public function addInvitee($user)    
    {                        
        if (!$this->event->isInvited($user['id'])) {
            $this->event->invitees()->attach($user['id'],['role'=>'invitee']);   
            session()->flash('success','Invitee added successfully to this event!');
        }else{            
            session()->flash('warning','This user was already invited');
        }
    } 

    public function mount(Event $event)
    {        
        $this->event = $event;
    }

    public function render()
    {
        return view('livewire.event.invitees-form');
    }
}
