<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserSocialForm extends Component
{
    public $user;

    protected $rules = [
        'user.facebook'     => 'nullable|url',
        'user.instagram'    => 'nullable|url',
        'user.youtube'      => 'nullable|url',
        'user.tiktok'       => 'nullable|url',
        'user.twitter'      => 'nullable|url',        
    ];

    public function save()
    {
        $this->validate();
        
        $this->user->save();

        session()->flash('success', 'User social information saved successfully!');
    }
    
    public function mount($user)
    {
        $this->user =  $user;
    }

    public function render()
    {
        return view('livewire.user.user-social-form');
    }
}
