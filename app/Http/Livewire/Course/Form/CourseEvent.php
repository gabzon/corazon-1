<?php

namespace App\Http\Livewire\Course\Form;

use App\Models\Course;
use App\Models\Event;
use Livewire\Component;

class CourseEvent extends Component
{
    public Course $course;
    public Event|string $event = '';
    public $events;

    protected $rules = [
        'event'    => 'required|integer|min:1'
    ];

    public function save()
    {
        $this->validate();
        $this->course->event()->associate($this->event)->save();     
        session()->flash('success', 'Workshop added to event successfully!');
    }

    public function delete(Event $event)
    {
        $this->course->event()->dissociate($event)->save();                
        session()->flash('success', 'Workshop removed from event successfully!');
    }

    public function mount(Course $course)
    {
        $this->course = $course;     
        $this->events = Event::with('organizations')->where('status', 'active')->byOrganization($course->organization_id)->get();           
    }    

    public function render()
    {
        return view('livewire.course.form.course-event');
    }
}






// class Workshops extends Component
// {
   

//     public function save()
//     {
//         $this->validate();          
//         try {
//             $course = Course::find($this->course);
//             if ($this->event->hasCourse($course->id)) {
//                 session()->flash('warning', 'Workshop already on the list!');
//                 return;
//             }
//             $this->event->courses()->save($course);      
//             session()->flash('success', 'Workshop added to event successfully!');
//             $this->loadEventCourses($this->event->id);
//         } catch (\Throwable $th) {            
//             session()->flash('warning', 'Something wrong happened!');
//         }        
//     }

//     public function mount(Event $event)
//     {        
//         $this->loadEventCourses($event->id);
//         $this->courses = Course::where('type','workshop')->where('status', 'active')->whereIn('organization_id', $event->organizations->pluck('id')->toArray())->get();
//     }


//     public function render()
//     {
//         return view('livewire.event.workshops');
//     }
// }
