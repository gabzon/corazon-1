<?php

namespace App\Http\Livewire\Schedule;

use App\Models\Event;
use Livewire\Component;

class Events extends Component
{
    // public $parties;
    // public $workshops;
    // public $festivals;

    // public function loadData()
    // {
    //     $this->parties = ;
    //     $this->workshops = Event::whereStatus('active')->whereType('workshops')->get();
    //     $this->festivals = Event::whereStatus('active')->whereType('festivals')->get();        
    // }

    // public function mount()
    // {
    //     $this->loadData();
    // }

    public function render()
    {
        Event::shouldExpire()->get()->each->expire();

        return view('livewire.schedule.events', [
            'parties'   => Event::isActive()->where('type','party')->orderBy('start_date','asc')->latest()->get(),
            'workshops' => Event::isActive()->where('type',"workshop")->orderBy('start_date','asc')->latest()->get(),
            'festivals' => Event::isActive()->where('type',"festival")->orderBy('start_date','asc')->latest()->get(),
        ]);
    }
}
