<?php

namespace App\Http\Livewire\Lesson\Form;

use App\Models\Course;
use App\Models\Event;
use App\Models\Lesson;
use Livewire\Component;

class DefaultForm extends Component
{
    public Lesson $lesson;    
    public string $method = 'store';
    public bool $fullAccess = true;
    public Event|null $event;
    public string $type = 'course';
    public string|int $organization = '';
    public string|int $workshop = '';

    protected $rules = [
        'lesson.title'         => 'required|string',
        'lesson.date'          => 'required|date',
        'lesson.description'   => 'nullable|string',
        'lesson.comments'      => 'nullable|string',
        'lesson.user_id'       => 'required',
        'organization'         => 'required|integer|min:1',
        'workshop'             => 'required|integer|min:1',
        'lesson.course_id'     => 'required',
        'lesson.organization_id' => 'required',
    ];

    public function updatedOrganization($value)
    {
        $this->lesson->organization_id = $value;
    }

    public function updatedWorkshop($value)
    {
        $this->lesson->course_id = $value;
    }

    public function save()
    {        
        $this->validate();        

        $this->lesson->save();
        
        session()->flash('success','Lesson saved successfully!');
        
        if ($this->method == 'store') {            
            return redirect()->route('lesson.edit', $this->lesson);
        }

    }

    public function mount(Lesson $lesson = null, $cid = null, $oid = null, Event $event = null)
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
            $this->lesson->user_id = auth()->user()->id;

            if ($event->exists) {
                $this->event = $event;
                $this->organizations = $event->organizations;                
                $this->courses = $event->courses;
                $this->type = 'event';
                $this->lesson->course_id = '';
                $this->lesson->organization_id = '';                
            }else{
                $this->lesson->course_id = $cid;
                $this->lesson->organization_id = $oid;
            }
            

        }
    }

    public function render()
    {
        return view('livewire.lesson.form.default-form');
    }
}


    
    
    
    
    
    