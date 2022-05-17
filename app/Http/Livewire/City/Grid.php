<?php

namespace App\Http\Livewire\City;

use App\Models\City;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Grid extends Component
{
    public function render()
    {
        $cities = City::whereHas('events', function (Builder $query) {
            $query->where('status', 'active');
        })->withCount('events')
        ->orderBy('events_count', 'desc')->get();
        
        return view('livewire.city.grid', [
            'cities' => $cities
        ]);        
    }
}

