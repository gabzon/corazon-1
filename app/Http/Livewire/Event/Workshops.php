<?php

namespace App\Http\Livewire\Event;

use App\Models\Course;
use App\Models\Event;
use Livewire\Component;

class Workshops extends Component
{
    public Event $event;
    public string|int $course = '';
    public $courses;


    protected $rules = [
        'course'    => 'required|integer|min:1'
    ];    

    public function save()
    {
        $this->validate();          
        try {
            $course = Course::find($this->course);
            if ($this->event->hasCourse($course->id)) {
                session()->flash('warning', 'Workshop already on the list!');
                return;
            }
            $this->event->courses()->save($course);      
            session()->flash('success', 'Workshop added to event successfully!');
            $this->loadEventCourses($this->event->id);
        } catch (\Throwable $th) {            
            session()->flash('warning', 'Something wrong happened!');
        }        
    }

    public function delete(Course $course)
    {
        $course->event()->dissociate($this->event)->save();
        $this->loadEventCourses($this->event->id);
        session()->flash('success', 'Workshop removed from event successfully!');
    }

    public function mount(Event $event)
    {        
        $this->loadEventCourses($event->id);
        $this->courses = Course::where('type','workshop')->where('status', 'active')->whereIn('organization_id', $event->organizations->pluck('id')->toArray())->get();
    }

    public function loadEventCourses(int $id)
    {
        $this->event = Event::with('courses')->find($id);
    }

    public function render()
    {
        return view('livewire.event.workshops');
    }
}
