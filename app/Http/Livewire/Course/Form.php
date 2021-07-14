<?php

namespace App\Http\Livewire\Course;

use App\Models\Classroom;
use App\Models\Course;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Http\Livewire\Traits\WithThumbnail;

class Form extends Component
{
    use WithThumbnail;

    public $action = 'store';
    public $course;

    protected $listeners = ['instructorsList' => 'updateInstructorsList','thumbnail' => 'updateThumbnail', 'selectedStyles' => 'updateStyles'];
    
    protected $rules = [
        'course.name'           => 'required',
        'course.slug'           => 'required',
        'course.tagline'        => 'nullable',
        'course.excerpt'        => 'nullable',
        'course.description'    => 'nullable',
        'course.tagline'        => 'nullable',
        'course.keywords'       => 'nullable',

        'course.focus'          => 'required',
        'course.level'          => 'required',
        'course.level_number'   => 'nullable',
        'course.city_id'        => 'required',
        'course.type'           => 'required',

        'course.duration'       => 'nullable',

        'course.start_date'     => 'required',
        'course.end_date'       => 'required|date|after_or_equal:start_date',
        'course.monday'         => 'nullable',
        'course.start_time_mon' => 'nullable|date_format:H:i',
        'course.end_time_mon'   => 'nullable|date_format:H:i|after:start_time_mon',
        'course.tuesday'        => 'nullable',
        'course.start_time_tue' => 'nullable|date_format:H:i',
        'course.end_time_tue'   => 'nullable|date_format:H:i|after:start_time_tue',
        'course.wednesday'      => 'nullable',
        'course.start_time_wed' => 'nullable|date_format:H:i',
        'course.end_time_wed'   => 'nullable|date_format:H:i|after:start_time_wed',
        'course.thursday'       => 'nullable',
        'course.start_time_thu' => 'nullable|date_format:H:i',
        'course.end_time_thu'   => 'nullable|date_format:H:i',
        'course.friday'         => 'nullable',
        'course.start_time_fri' => 'nullable|date_format:H:i',
        'course.end_time_fri'   => 'nullable|date_format:H:i|after:start_time_fri',
        'course.saturday'       => 'nullable',
        'course.start_time_sat' => 'nullable|date_format:H:i',
        'course.end_time_sat'   => 'nullable|date_format:H:i|after:start_time_sat',
        'course.sunday'         => 'nullable',
        'course.start_time_sun' => 'nullable|date_format:H:i',
        'course.end_time_sun'   => 'nullable|date_format:H:i|after:start_time_sun',    

        'course.video1'         => 'nullable',
        'course.video2'         => 'nullable',
        'course.video3'         => 'nullable',
        
        'course.full_price'     => 'nullable',
        'course.reduced_price'  => 'nullable',    
        
        'course.thumbnail'      => 'nullable',
            
        'course.status'         => 'required',        
        
        'course.user_id'        => 'nullable',
        'course.classroom_id'   => 'required',
        
        'course.organization_id'=> 'required',
    ];

    public $thumbnail;
    public $instructors;
    public $styles;

    public function updateThumbnail(array $file)
    {                
        $this->thumbnail = $file;
    }

    public function updateStyles($styles)
    {        
        $this->styles = $styles;
    }

    public function updatedClassroom(int $id)
    {
        $room = Classroom::find($id);        
        $this->city = $room->location->id;
    }

    public function updateInstructorsList($ids)
    {
        $this->instructors = $ids;
    }

    public function addInstructor($value)
    {        
        $instructor = User::find($value);
    }

    public function updatedCourseName()
    {
        $this->course->slug = Str::slug($this->course->name, '-') . '-' .\Carbon\Carbon::now()->timestamp;
    }

    public function updatedStyles($value)
    {
        dd($value);
    }

    public function save()
    {                                 
        $this->validate();      

        $this->course->user_id = auth()->user()->id;    
        
        $this->course->save();
        
        if ($this->thumbnail) {
            $this->handleThumbnailUpload($this->course, $this->thumbnail);
        }

        if ($this->instructors) {
            $this->course->instructors()->sync($this->instructors);
        }

        if ($this->styles) {
            //dd($this->styles);
            $this->course->styles()->sync($this->styles);
        }

        session()->flash('success','Course saved successfully.');
        
        return redirect(route('course.index'));
    }

    public function mount(Course $course = null)
    {               
        if (!$course->exists) 
        {
            $this->course = new Course;              
            $this->course->status = '';          
            $this->course->focus = '';
            $this->course->level = '';            
        } else {
            $this->action       = 'update';
            $this->course       = $course;        
        }
    }
    
    public function render()
    {
        return view('livewire.course.form');
    }
}
