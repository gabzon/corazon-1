<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;
use Livewire\Component;

class UserInfoForm extends Component
{
    public $user;

    protected function rules() 
    {
        return [
            'user.name'         => 'required|string',
            'user.email'        => 'required|string',
            'user.username'     => 'nullable|string|max:25|unique:users,username,'.$this->user->id,
            'user.birthday'     => 'required|string',
            'user.mobile'       => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
            'user.profession'   => 'nullable|string',
            'user.gender'       => 'required|string',
            'user.idn'          => 'nullable|string',   
            'user.biography'    => 'nullable|string',     
        ];
    } 

    public function save()
    {
        $validatedData = $this->validate();        
    
        $this->user->save($validatedData);

        session()->flash('success', 'User information saved successfully!');
    }
    
    public function mount($user)
    {
        $this->user =  $user;
    }

    public function render()
    {
        return view('livewire.user.user-info-form');
    }
}
