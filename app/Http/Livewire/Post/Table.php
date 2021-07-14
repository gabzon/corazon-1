<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;
    
    public function render()
    {
        return view('livewire.post.table', [
            'collection' => Post::paginate(10)
        ]);
    }
}
