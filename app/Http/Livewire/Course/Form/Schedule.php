<?php

namespace App\Http\Livewire\Course\Form;

use App\Models\Course;
use Livewire\Component;

class Schedule extends Component
{
    public Course $course;

    protected $rules = [
        'course.duration'       => 'nullable|date_format:H:i:s',

        'course.start_date'     => 'required',
        'course.end_date'       => 'required|date|after_or_equal:start_date',
        'course.monday'         => 'nullable',
        'course.start_time_mon' => 'nullable|date_format:H:i:s',
        'course.end_time_mon'   => 'nullable|date_format:H:i:s|after:course.start_time_mon',
        'course.tuesday'        => 'nullable',
        'course.start_time_tue' => 'nullable|date_format:H:i:s',
        'course.end_time_tue'   => 'nullable|date_format:H:i:s|after:course.start_time_tue',
        'course.wednesday'      => 'nullable',
        'course.start_time_wed' => 'nullable|date_format:H:i:s',
        'course.end_time_wed'   => 'nullable|date_format:H:i:s|after:course.start_time_wed',
        'course.thursday'       => 'nullable',
        'course.start_time_thu' => 'nullable|date_format:H:i:s',
        'course.end_time_thu'   => 'nullable|date_format:H:i:s|after:course.start_time_thu',
        'course.friday'         => 'nullable',
        'course.start_time_fri' => 'nullable|date_format:H:i:s',
        'course.end_time_fri'   => 'nullable|date_format:H:i:s|after:course.start_time_fri',
        'course.saturday'       => 'nullable',
        'course.start_time_sat' => 'nullable|date_format:H:i:s',
        'course.end_time_sat'   => 'nullable|date_format:H:i:s|after:course.start_time_sat',
        'course.sunday'         => 'nullable',
        'course.start_time_sun' => 'nullable|date_format:H:i:s',
        'course.end_time_sun'   => 'nullable|date_format:H:i:s|after:course.start_time_sun',    
    ];

    public function save()
    {        
        $this->validate();

        $this->course->save();

        session()->flash('success','Course schedule saved successfully!');
    }
    
    public function mount(Course $course)
    {
        $this->course = $course;
    }

    public function render()
    {
        return view('livewire.course.form.schedule');
    }
}

