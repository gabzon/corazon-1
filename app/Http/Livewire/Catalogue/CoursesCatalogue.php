<?php

namespace App\Http\Livewire\Catalogue;

use App\Models\City;
use App\Models\Course;
use App\Models\Organization;
use App\Models\Style;
use Livewire\Component;
use Livewire\WithPagination;

class CoursesCatalogue extends Component
{
    use WithPagination;

    // public $courses;
    public $city;
    public $styleId;
    public $level;
    public $focus;       
    public $day;    
    public $school;

    public $cities;
    public $styles;
    public $schools;
    public $readyToLoad = false;
    

    public function loadCourses()
    {
        $this->readyToLoad = true;
    }

    public function updating($name, $value)
    {
        $this->resetPage();
    }

    public function resetCatalog()
    {        
        $this->city = null;
        $this->styleId = null;
        $this->level = null;
        $this->school = null;
    }


    public function mount($city = null)
    {
        $this->city = $city;
    }    

    public function render()
    {        
        $this->cities = City::has('courses')->orderBy('name','asc')->get();        
        $this->styles = Style::has('courses')->orderBy('name','asc')->get();
        $this->schools = Organization::has('courses')->inCity($this->city)->orderBy('name','asc')->get();        
        Course::shouldExpire()->get()->each->expire();
        
        $fields = [
            'id','name','level', 'level_code','focus', 
            'monday', 'start_time_mon', 'end_time_mon', 
            'tuesday', 'start_time_tue', 'end_time_tue', 
            'wednesday', 'start_time_wed', 'end_time_wed', 
            'thursday', 'start_time_thu', 'end_time_thu', 
            'friday', 'start_time_fri', 'end_time_fri', 
            'saturday', 'start_time_sat', 'end_time_sat', 
            'sunday', 'start_time_sun', 'end_time_sun', 
            'organization_id', 'space_id', 'is_private',
        ];
        
        $coursesList = Course::with(['organization','space'])->select($fields)
                            ->isActive()
                            ->inCity($this->city)
                            ->organization($this->school)
                            ->style($this->styleId)
                            ->level($this->level)
                            ->dayOfWeek($this->day) 
                            ->inRandomOrder(); 

        $emptyCourses = Course::whereLevel('xxxx');
                                    
        return view('livewire.catalogue.courses-catalogue',[
            'courses' => $this->readyToLoad ? $coursesList->paginate(20) : $emptyCourses->paginate(10)
        ]);
    }
}