<?php

namespace App\Http\Livewire\Catalogue;

use App\Models\Course;
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

    public function updating($name, $value)
    {
        $this->resetPage();
    }
    
    public function mount($city = null)
    {
        $this->city = $city;
    }

    public function render()
    {
        Course::shouldExpire()->get()->each->expire();
        
        $fields = [
            'id','name','level', 'focus', 
            'monday', 'start_time_mon', 'end_time_mon', 
            'tuesday', 'start_time_tue', 'end_time_tue', 
            'wednesday', 'start_time_wed', 'end_time_wed', 
            'thursday', 'start_time_thu', 'end_time_thu', 
            'friday', 'start_time_fri', 'end_time_fri', 
            'saturday', 'start_time_sat', 'end_time_sat', 
            'sunday', 'start_time_sun', 'end_time_sun', 
            'full_price','organization_id', 'space_id'
        ];

        $courses = Course::select($fields)
                            ->isActive()
                            ->inCity($this->city)
                            ->organization($this->school)
                            ->style($this->styleId)
                            ->level($this->level)
                            ->dayOfWeek($this->day) 
                            ->inRandomOrder();


        
        return view('livewire.catalogue.courses-catalogue',[
            'courses' => $courses->paginate(20)
        ]);
    }
}