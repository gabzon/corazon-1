<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserStatusForm extends Component
{
    public $user;

    protected $rules = [
        'user.work_status'              => 'nullable|string',
        'user.unemployement_proof'      => 'nullable|url',
        'user.unemployement_expiry_date'=> 'nullable|date',
        'user.work_status_verified'     => 'nullable|bool',
    ];

    public function save()
    {
        $this->validate();
        
        $this->user->save();

        session()->flash('success', 'User status information saved successfully!');
    }
    
    public function mount($user)
    {
        $this->user =  $user;
    }

    public function render()
    {
        return view('livewire.user.user-status-form');
    }
}
