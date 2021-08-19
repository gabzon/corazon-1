<?php

namespace App\Http\Livewire\Organization;

use App\Models\Organization;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;
    
    public function render()
    {
        return view('livewire.organization.table', [
            'collection' => Organization::latest()->paginate(10)
        ]);
    }
}
