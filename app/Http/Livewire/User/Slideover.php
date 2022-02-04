<?php

namespace App\Http\Livewire\User;

use App\Models\Organization;
use App\Models\User;
use Livewire\Component;

class Slideover extends Component
{
    public User $user;
    public Organization $org;
    
    public function mount(User $user, Organization $org)
    {
        $this->user = $user;
        $this->org = $org;
    }

    public function render()
    {
        return view('livewire.user.slideover');
    }
}
