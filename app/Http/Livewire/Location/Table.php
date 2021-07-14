<?php

namespace App\Http\Livewire\Location;

use App\Models\Location;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;
    
    public function render()
    {        
        return view('livewire.location.table', [
            'collection' => Location::paginate(10)
        ]);
    }
}
