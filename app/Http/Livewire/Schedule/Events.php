<?php

namespace App\Http\Livewire\Schedule;

use App\Models\Event;
use Livewire\Component;

class Events extends Component
{

    public $readyToLoadParties = false;
    public $readyToLoadWorkshops = false;
    public $readyToLoadFestivals = false;
     
    public function loadParties()
    {
        $this->readyToLoadParties = true;
    }
    public function loadWorkshops()
    {
        $this->readyToLoadWorkshops = true;
    }

    public function loadFestivals()
    {
        $this->readyToLoadFestivals = true;
    }

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
            'parties'   => $this->readyToLoadParties ? Event::isActive()->where('type','party')->orderBy('start_date','asc')->latest()->get() : [],
            'workshops' => $this->readyToLoadWorkshops ? Event::isActive()->where('type',"workshop")->orderBy('start_date','asc')->latest()->get() : [],
            'festivals' => $this->readyToLoadFestivals ? Event::isActive()->where('type',"festival")->orderBy('start_date','asc')->latest()->get() : [],
        ]);
    }
}
