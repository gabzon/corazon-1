<?php

namespace App\Http\Livewire\Shared;

use App\Models\User;
use Livewire\Component;

class UserRegistrationPanel extends Component
{
    public User $user;
    public $reg;

    protected $rules = [
        'reg.status'    => 'required',
        'reg.role'      => 'required',
        'reg.comments'  => 'nullable',
    ];
    
    public function mount(User $user, $reg)
    {
        if ($user->exists) {
            $this->user = $user;
        }
        
        $this->reg = $reg;
    }

    public function save()
    {
        $this->validate();

        $this->reg->save();      
        
        $this->emit('registrationUpdated', 'el valor magico');
    }

    public function render()
    {
        return view('livewire.shared.user-registration-panel');
    }
}
