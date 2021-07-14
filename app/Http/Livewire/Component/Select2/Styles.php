<?php

namespace App\Http\Livewire\Component\Select2;

use Livewire\Component;

class Styles extends Component
{
    public $model;
    public $collection;
    public $selected = [];

    public function updatedSelected($value)
    {
        $this->emit('selectedStyles', $this->selected);
    }

    public function mount($model)
    {   
        $this->model = $model;           
        $this->collection =  \App\Models\Style::all();
    }

    public function render()
    {
        return view('livewire.component.select2.styles');
    }
}
