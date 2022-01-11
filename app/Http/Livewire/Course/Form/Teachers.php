<?php

namespace App\Http\Livewire\Course\Form;

use App\Models\Course;
use App\Models\User;
use Livewire\Component;

class Teachers extends Component
{
    public Course $course;
    public $instructors = [];
    public $instructor = '';

    public function save()
    {
        if ($this->instructor == '') {
            session()->flash('warning','Please add an instructor to the list');
            return;
        }

        $user = User::findOrFail($this->instructor);
        
        if ($user->isRegistered($this->course)) {
            session()->flash('warning','This instructor is already in the list!'); 
            return;
        }

        $user->courseRegistrations()->attach($this->course->id,['role'=>'instructor','status'=> 'registered']);
        
        session()->flash('success','Instructor added successfully!');
        
        $this->loadList();
    }

    public function loadList()
    {
        $course = Course::with('instructors')->findOrFail($this->course->id);        
        $this->instructors = $course->instructors;
    }

    public function remove($instructorId)
    {        
        $user = User::findOrFail($instructorId);
        
        if (! $user->isRegisteredInCourse($this->course)) {
            session()->flash('warning','This instructor is not in the list!'); 
            return;
        }

        $user->courseRegistrations()->detach($this->course->id);            
        
        session()->flash('success','Instructor removed successfully!');
        
        $this->loadList();
    }
    
    public function mount(Course $course)
    {
        $this->course = $course;
        $this->loadList();        
    }
    
    public function render()
    {
        return view('livewire.course.form.teachers');
    }
}
