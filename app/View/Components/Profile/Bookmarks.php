<?php

namespace App\View\Components\Profile;

use App\Models\User;
use Illuminate\View\Component;

class Bookmarks extends Component
{    
    public $bookmarkable;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {                
        $courses = $user->bookmarkedCourses;        
        $events = $user->bookmarkedEvents;     
        $merge = $courses->merge($events);
        $this->bookmarkable = $merge->sortBy('start_date')->sortBy('status');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.profile.bookmarks');
    }
}
