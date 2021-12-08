<?php

namespace App\View\Components\Profile;

use Carbon\Carbon;
use Illuminate\View\Component;

class MonthRegistrations extends Component
{
    public $registrations;   
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->registrations = auth()->user()->registrations->filter(function($item){            
            if ($item->registrable->end_date >= Carbon::now()->addDays(7) && $item->registrable->start_date <= Carbon::today()->addDays(30)) {
                return  $item;
            }                
        });        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.profile.month-registrations');
    }
}

