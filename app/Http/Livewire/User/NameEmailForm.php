<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;
use Livewire\Component;

class NameEmailForm extends Component
{
    public $user;

    protected function rules() 
    {
        return [
            'user.name'         => 'required|string',
            'user.email'        => 'required|string|max:100|unique:users,email,'.$this->user->id,                    
        ];
    } 

    public function save()
    {
        $validatedData = $this->validate();        
    
        $this->user->save($validatedData);

        session()->flash('success', 'Name and email saved successfully!');
    }
    
    public function mount($user)
    {
        $this->user =  $user;
    }

    public function render()
    {
        return view('livewire.user.name-email-form');
    }
}