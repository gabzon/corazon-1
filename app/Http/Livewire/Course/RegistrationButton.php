<?php

namespace App\Http\Livewire\Course;

use App\Models\Course;
use Livewire\Component;

class RegistrationButton extends Component
{
    public Course $course;
    
    public function mount(Course $course)
    {
        $this->course = $course;
    }

    public function render()
    {
        return view('livewire.course.registration-button');
    }
}
