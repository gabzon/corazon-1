<?php

namespace App\Http\Livewire\Style;

use App\Models\Style;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;
    public $search = '';
    
    public function updating($name, $value){
        $this->resetPage();
    } 

    public function render()
    {
        $styles = Style::where('name', 'like', '%'.$this->search.'%');
        return view('livewire.style.table', [
            'collection' => $styles->paginate(10)
        ]);
    }
}
