<?php

namespace App\Http\Livewire\Style;

use App\Models\Style;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.style.table', [
            'collection' => Style::paginate(10)
        ]);
    }
}
