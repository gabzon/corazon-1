<?php

namespace App\Http\Livewire\Schedule;

use App\Models\Course;
use Livewire\Component;
use Livewire\WithPagination;

class Catalogue extends Component
{
    use WithPagination;

    // public $courses;

    public $day;
    public $city;
    public $school;
    public $style = '';
    public string $level = ''; 
    
    protected $listeners = [
        'cityUpdated'   => 'updateCity', 
        'styleUpdated'  => 'updateStyle',
        'schoolUpdated' => 'updateSchool',
        'levelUpdated'  => 'updateLevel',
        'focusUpdated'  => 'updateFocus',
        'dayUpdated'    => 'updateDay',
    ];

    public function updateCity($city)
    {        
        $this->city = $city;
        // $this->loadClasses();
    }

    public function updateStyle($style)
    {
        $this->style = $style;
        // $this->loadClasses();
    }
    
    public function updateLevel($value)
    {        
        $this->level = $value;
        // $this->loadClasses();
    }

    public function updateSchool($value)
    {
        $this->school = $value;
        // $this->loadClasses();
    }

    public function updateDay($value)
    {
        $this->day = $value;
        // $this->loadClasses();
    }
    
    public function loadClasses()
    {            
        

        // $this->courses       = Course::isActive()
        //                                 ->inCity($this->city)
        //                                 ->organization($this->school)
        //                                 ->style($this->style)
        //                                 ->level($this->level)
        //                                 ->dayOfWeek($this->day) 
        //                                 ->inRandomOrder()
        //                                 ->paginate(10);
        
    }

    public function mount()
    {
        $this->loadClasses();
    }

    public function render()
    {
        Course::shouldExpire()->get()->each->expire();

        return view('livewire.schedule.catalogue',[
            'courses' => Course::isActive()
                                            ->inCity($this->city)
                                            ->organization($this->school)
                                            ->style($this->style)
                                            ->level($this->level)
                                            ->dayOfWeek($this->day) 
                                            ->inRandomOrder()
                                            ->paginate(20)
        ]);
    }
}
