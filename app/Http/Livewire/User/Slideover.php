<?php

namespace App\Http\Livewire\User;

use App\Models\Organization;
use App\Models\User;
use Livewire\Component;

class Slideover extends Component
{
    public User $user;
    public array $orgId;
    
    public function mount(User $user,  $orgId)
    {
        $this->user = $user;
        $this->orgId = $orgId;
    }

    public function render()
    {
        return view('livewire.user.slideover');
    }
}
