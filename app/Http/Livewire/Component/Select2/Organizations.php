<?php

namespace App\Http\Livewire\Component\Select2;

use Livewire\Component;

class Organizations extends Component
{
    public $model;
    public $collection;
    public $selected = [];

    public function updatedSelected($value)
    {
        $this->emit('selectedOrganizations', $this->selected);
    }

    public function mount($model)
    {   
        $this->model = $model;           
        $this->collection =  \App\Models\Organization::all();
    }

    public function render()
    {
        return view('livewire.component.select2.organizations');
    }
}
