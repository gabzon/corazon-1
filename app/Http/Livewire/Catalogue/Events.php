<?php

namespace App\Http\Livewire\Catalogue;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class Events extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.catalogue.events', [
            'events' => Event::IsActive()
                                ->orderBy('start_date','asc')
                                ->latest()
                                ->paginate(30)            
        ]);
    }
}

