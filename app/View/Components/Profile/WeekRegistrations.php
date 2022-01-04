<?php

namespace App\View\Components\Profile;

use App\Contracts\Registrable;
use Carbon\Carbon;
use Illuminate\View\Component;

class WeekRegistrations extends Component
{
    public $registrations;    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {        
        $this->registrations = auth()->user()->courseRegistrations->filter(function($course){            
            if ($course->end_date >= Carbon::today() && $course->start_date <= Carbon::today()->addDays(7)) {
                return  $course;
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
        return view('components.profile.week-registrations');
    }
}
