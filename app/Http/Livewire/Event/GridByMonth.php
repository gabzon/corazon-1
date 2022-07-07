<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use App\Models\Style;
use Carbon\Carbon;
use Livewire\Component;

class GridByMonth extends Component
{
    public Style $style;
    
    public function mount($style)
    {
        $this->style = $style;
    }

    public function render()
    {   
        $events = Event::isActive()->style($this->style->id)->orderBy('start_date')->get()->groupBy(function($event){
            return Carbon::parse($event->start_date)->format('F Y');
        });

        return view('livewire.event.grid-by-month', [
            'collection' => $events
        ]);
    }
}
