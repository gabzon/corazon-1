<?php

namespace App\Http\Livewire\City;

use Livewire\Component;

class Delete extends Component
{
    public function delete()
    {
        dd('hola');
    }
    public function render()
    {
        return view('livewire.city.delete');
    }
}
