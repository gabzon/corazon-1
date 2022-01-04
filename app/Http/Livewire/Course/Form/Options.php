<?php

namespace App\Http\Livewire\Course\Form;

use App\Models\Course;
use Livewire\Component;
use Spatie\MediaLibraryPro\Http\Livewire\Concerns\WithMedia;

class Options extends Component
{
    use WithMedia;

    public Course $course;
    public $mediaComponentNames = ['thumbnail'];
    public $styles;
    public $thumbnail;

    protected $listeners = ['selectedStyles' => 'updateStyles'];

    protected $rules = [
        'course.thumbnail'  => 'nullable',
        'course.tagline'    => 'nullable',
        'course.excerpt'    => 'nullable',
        'course.keywords'   => 'nullable',
        'course.description'=> 'nullable',
        'course.standby'    => 'nullable',
    ];

    public function updateStyles($styles)
    {                
        $this->styles = $styles;        
    }

    public function save()
    {
        $this->validate();

        $this->course->save();

        $this->course->addFromMediaLibraryRequest($this->thumbnail)->toMediaCollection('courses');

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