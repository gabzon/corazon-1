<?php

namespace App\View\Components\Profile;

use App\Models\User;
use Illuminate\View\Component;

class LikesList extends Component
{
    public User $user;
    public $list;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(User $user = null)
    {        
        
        $this->user = $user ?? auth()->user();

        $courses = $this->user->likedCourses;
        $events = $this->user->likedEvents;
        $this->list = $courses->merge($events)->sortBy('start_date');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.profile.likes-list');
    }
}
