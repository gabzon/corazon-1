<?php

namespace App\Http\Livewire\Course\Form;

use App\Models\Course;
use Livewire\Component;

class Videos extends Component
{
    public Course $course;

    protected $rules = [
        'course.video1' => 'nullable',
        'course.video2' => 'nullable',
        'course.video3' => 'nullable',
    ];

    public function save()
    {
        $this->validate();

        $this->course->save();

        session()->flash('success','Course saved successfully!');
    }

    public function mount(Course $course)
    {
        $this->course = $course;
    }

    public function render()
    {
        return view('livewire.course.form.videos');
    }
}