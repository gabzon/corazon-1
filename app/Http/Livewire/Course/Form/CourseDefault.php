<?php

namespace App\Http\Livewire\Course\Form;

use App\Models\Course;
use Livewire\Component;
use Illuminate\Support\Str;

class CourseDefault extends Component
{
    public Course $course;
    public string $action = 'store';

    protected $rules = [
        'course.organization_id'   => 'required',        
        'course.city_id'           => 'required',
        'course.space_id'          => 'required',
        'course.name'              => 'required',
        'course.slug'              => 'required',
        'course.focus'             => 'required',
        'course.level_code'        => 'required',
        'course.level'             => 'nullable',
        'course.level_number'      => 'nullable',
        'course.level_label'       => 'nullable',
        'course.type'              => 'required',
        'course.start_date'        => 'required',
        'course.end_date'          => 'required',
        'course.status'            => 'required',
        'course.user_id'           => 'nullable',
    ];

    public function updatedCourseLevelCode($value)
    {
        if ($value == 'op') {
            $this->course->level = 'open level';
        }
        if ($value == 'a1' || $value == 'a2' || $value == 'a3') {
            $this->course->level = 'beginner';
        }
        if ($value == 'b1' || $value == 'b2' || $value == 'b3') {
            $this->course->level = 'intermediate';
        }
        if ($value == 'c1' || $value == 'c2' || $value == 'c3') {
            $this->course->level = 'advanced';
        }
        if ($value == 'd1') {
            $this->course->level = 'master';
        }
    }

    public function updatedCourseName()
    {
        $this->course->slug = Str::slug($this->course->name, '-') . '-' .\Carbon\Carbon::now()->timestamp;
    }

    public function save()
    {
        $this->validate();        
        $this->course->user_id = auth()->user()->id;
        $this->course->save();
        
        session()->flash('success','Course saved successfully!');
        
        if ($this->action == 'store') {
            
            return redirect()->route('course.edit', $this->course);
        }
    }
    
    public function mount(Course $course = null)
    {        
        if ($course->exists) {
            $this->course = $course;
            $this->action = 'update';
        } else {
            $this->course = new Course();
            $this->course->level_code = '';
            $this->course->focus = '';
        }
    }

    public function render()
    {
        return view('livewire.course.form.course-default');
    }
}