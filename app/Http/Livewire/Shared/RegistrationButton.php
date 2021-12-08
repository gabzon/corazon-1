<?php

namespace App\Http\Livewire\Shared;

use Livewire\Component;

class RegistrationButton extends Component
{
    public $model;
    
    public function mount($model)
    {
        $this->model = $model;
    }

    public function render()
    {
        return view('livewire.shared.registration-button');
    }
}