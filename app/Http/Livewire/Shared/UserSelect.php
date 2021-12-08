<?php

namespace App\Http\Livewire\Shared;

use Livewire\Component;

class UserSelect extends Component
{
    public $selected;        

    public function add()
    {   
        $this->emit('instructorToOrganization', $this->selected);
    }

    public function render()
    {
        return view('livewire.shared.user-select');
    }
}