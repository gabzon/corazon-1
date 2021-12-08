<?php

namespace App\Http\Livewire\Course\Form;

use App\Models\Course;
use Livewire\Component;

class CourseDefault extends Component
{
    public Course $course;
    protected $rules = [
        'organization_id' => 'required',        
        'city_id'   => 'required',
        'space_id'  => 'required',
        'name'      => 'required',
        'slug'      => 'required',
        'focus'     => 'required',
        'level'     => 'required',
        'type'      => 'required',
        'start_date'=> 'required',
        'end_date'  => 'required',
        'status'    => 'required',
    ];
    
    public function mount(Course $course = null)
    {
        if ($course->exists) {
            $this->course = $course;
        } else {
            $this->course = new Course();
        }
    }

    public function render()
    {
        return view('livewire.course.form.course-default');
    }
}


