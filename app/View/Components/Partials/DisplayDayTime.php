<?php

namespace App\View\Components\Partials;

use App\Models\Course;
use Illuminate\View\Component;

class DisplayDayTime extends Component
{
    public Course $course;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Course $course)
    {
        $this->course = $course;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.partials.display-day-time');
    }
}
