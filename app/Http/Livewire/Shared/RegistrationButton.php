<?php

namespace App\Http\Livewire\Shared;

use App\Contracts\Registrable;
use App\Models\Event;
use Livewire\Component;

class RegistrationButton extends Component
{
    public Registrable $model;
    
    public function mount(Registrable $model)
    {
        $this->model = $model;
    }

    public function render()
    {
        return view('livewire.shared.registration-button');
    }
}