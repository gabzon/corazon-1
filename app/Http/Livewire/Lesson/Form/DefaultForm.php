<?php

namespace App\Http\Livewire\Lesson\Form;

use App\Models\Course;
use App\Models\Lesson;
use Livewire\Component;

class DefaultForm extends Component
{
    public Lesson $lesson;    
    public string $method = 'store';
    public bool $fullAccess = true;

    protected $rules = [
        'lesson.title'         => 'required|string',
        'lesson.date'          => 'required|date',
        'lesson.description'   => 'nullable|string',
        'lesson.comments'      => 'nullable|string',
        'lesson.user_id'       => 'required',
        'lesson.course_id'     => 'required',
        'lesson.organization_id' => 'required',
    ];

    public function save()
    {        
        $this->validate();        

        $this->lesson->save();
        
        session()->flash('success','Lesson saved successfully!');
        
        if ($this->method == 'store') {            
            return redirect()->route('lesson.edit', $this->lesson);
        }

    }

    public function mount(Lesson $lesson = null, $cid = null, $oid = null)
    {                       
        if ($lesson->exists) {
            $this->lesson = $lesson;
            $this->method = 'update';
            $course = Course::findOrFail($lesson->course_id);    
            
            if (auth()->user()->cannot('update', $lesson)) {
                $this->fullAccess = false;
            }

        } else {            
            $this->lesson = new Lesson();
            $this->lesson->course_id = $cid;
            $this->lesson->user_id = auth()->user()->id;
            $this->lesson->organization_id = $oid;
        }
    }

    public function render()
    {
        return view('livewire.lesson.form.default-form');
    }
}


    
    
    
    
    
    