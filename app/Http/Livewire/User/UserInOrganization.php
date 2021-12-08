<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserInOrganization extends Component
{
    public User $user;    
    public $selected;

    public function addManager()
    {
        $this->emit('addMember', $this->selected);
    }

    public function addInstructor()
    {
        $this->emit('addMember', $this->selected);
    }
    
    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.user.user-in-organization');
    }
}
