<?php

namespace App\Http\Livewire\Course\Form;

use App\Models\Course;
use Livewire\Component;

class Options extends Component
{
    public Course $course;
    
    public $styles;    

    protected $listeners = ['selectedStyles' => 'updateStyles'];

    protected $rules = [
        'course.thumbnail'  => 'nullable',
        'course.public'     => 'required',
        'course.tagline'    => 'nullable',
        'course.excerpt'    => 'nullable',
        'course.keywords'   => 'nullable',
        'course.description'=> 'nullable',
        'course.is_private' => 'nullable',
        'course.limit_attendees' => 'nullable|integer|min:1',
        'course.default_registration_status' => 'nullable',
        
    ];

    public function updateStyles($styles)
    {                
        $this->styles = $styles;        
    }

    public function save()
    {
        $this->validate();

        $this->course->save();        

        if ($this->styles) {                        
            $this->course->styles()->sync($this->styles);            
        }

        session()->flash('success','Course options saved successfully!');
    }

    public function mount(Course $course)
    {
        $this->course = $course;
    }
    public function render()
    {
        return view('livewire.course.form.options');
    }
}