<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{    
    use WithPagination;
    
    public function render()
    {
        return view('livewire.event.table', [
            'events' => Event::latest()->paginate(10)
        ]);
    }
}
