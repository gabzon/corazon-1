<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserRightsForm extends Component
{
    public User $user;
    
    public array $manages = [];
    public array $teaches = [];
    
    protected $rules = ['user.role' => 'nullable|string' ];
    
    public function save()
    {   
        $this->validate();
        
        if ($this->manages) {
            $this->user->manages()->syncWithPivotValues($this->manages, ['role' => 'manager']);                            
        }

        if ($this->teaches) {
            $this->user->teaches()->syncWithPivotValues($this->teaches, ['role' => 'instructor']);                            
        }

        $this->user->save();
        session()->flash('success','User\'s rights saved successfully!');
    }

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.user.user-rights-form');
    }
}
