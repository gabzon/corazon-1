<?php

namespace App\Http\Livewire\Location;

use App\Models\Event;
use App\Models\Location;
use Livewire\Component;
use Livewire\WithPagination;

class EventsList extends Component
{
    use WithPagination;

    public Location $location;
    public int $lid;
    
    public function mount(Location $location)
    {
        $this->location = $location;
        $this->lid = $location->id;
    }

    public function render()
    {
        return view('livewire.location.events-list', [
            'events' => Event::where('location_id', $this->lid)->orderBy('start_date','desc')->paginate(10)
        ]);
    }
}
