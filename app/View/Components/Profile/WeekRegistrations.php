<?php

namespace App\View\Components\Profile;

use App\Contracts\Registrable;
use Carbon\Carbon;
use Illuminate\View\Component;

class WeekRegistrations extends Component
{
    public $list;    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {     
        $courses = auth()->user()->courseRegistrations;
        $bookmarkedCourses = auth()->user()->bookmarkedCourses;
        $events = auth()->user()->eventRegistrations;  
        $bookmarkedEvents = auth()->user()->bookmarkedEvents;
        
        $mergedCourses = $courses->concat($bookmarkedCourses)->unique();
        $mergedEvents = $events->concat($bookmarkedEvents)->unique();        

        $unique = $mergedCourses->concat($mergedEvents);

    
        $this->list = $unique->filter(function($activity){            
            if ($activity->end_date >= Carbon::today() && $activity->start_date <= Carbon::today()->addDays(7)) {
                return $activity;
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



// public function registrations()
// {
//     $events = auth()->user()->eventRegistrations;
//     $courses = auth()->user()->courseRegistrations;
//     $list = $events->merge($courses); 

//     return view('profile.registrations', ['list' => $list]);
// }

// public function likes()
// {
//     $courses = auth()->user()->likedCourses;
//     $events = auth()->user()->likedEvents;
//     $list = $courses->merge($events)->sortBy('start_date');

//     return view('profile.likes', ['list'=> $list]);
// }