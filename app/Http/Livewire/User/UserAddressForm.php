<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserAddressForm extends Component
{     
    public $user;

    protected $rules = [
        'user.country'      => 'nullable|string',
        'user.address'      => 'nullable|string',
        'user.address_info' => 'nullable|string',
        'user.city'         => 'nullable|string',
        'user.state'        => 'nullable|string',
        'user.zip'          => 'nullable|string|max:12',
    ];

    public function save()
    {
        $this->validate();
        
        $this->user->save();

        session()->flash('success', 'User address information saved successfully!');
    }
    
    public function mount($user)
    {
        $this->user =  $user;
    }

    public function render()
    {
        return view('livewire.user.user-address-form');
    }
}
