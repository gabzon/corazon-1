<?php

namespace App\Http\Livewire\Shared;

use Livewire\Component;

class Bookmark extends Component
{
    public $model;
    
    public $withCount;
    
    public function mount($model, $withCount = false)
    {
        $this->model = $model;
        $this->withCount = $withCount;
    }

    public function render()
    {
        return view('livewire.shared.bookmark');
    }
}