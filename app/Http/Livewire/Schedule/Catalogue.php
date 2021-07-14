<?php

namespace App\Http\Livewire\Schedule;

use App\Models\Course;
use Livewire\Component;

class Catalogue extends Component
{
    public $monday;
    public $tuesday;
    public $wednesday;
    public $thursday;
    public $friday;
    public $saturday;
    public $sunday;
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
        $this->loadClasses();
    }

    public function updateStyle($style)
    {
        $this->style = $style;
        $this->loadClasses();
    }
    
    public function updateLevel($value)
    {        
        $this->level = $value;
        $this->loadClasses();
    }

    public function updateSchool($value)
    {
        $this->school = $value;
        $this->loadClasses();
    }

    public function updateDay($value)
    {
        $this->day = $value;
        $this->loadClasses();
    }
    
    public function loadClasses()
    {            
        Course::shouldExpire()->get()->each->expire();

        $this->monday       = Course::isActive()
                                        ->inCity($this->city)
                                        ->organization($this->school)
                                        ->style($this->style)
                                        ->level($this->level)
                                        ->dayOfWeek($this->day)                                        
                                        ->get();
        // $this->tuesday      = Course::dayOfWeek('tuesday')->inCity($this->city)->organization($this->school)->style($this->style)->level($this->level)->get();
        // $this->wednesday    = Course::dayOfWeek('wednesday')->inCity($this->city)->organization($this->school)->style($this->style)->level($this->level)->get();
        // $this->thursday     = Course::dayOfWeek('thursday')->inCity($this->city)->organization($this->school)->style($this->style)->level($this->level)->get(); 
        // $this->friday       = Course::dayOfWeek('friday')->inCity($this->city)->organization($this->school)->style($this->style)->level($this->level)->get();
        // $this->saturday     = Course::dayOfWeek('saturday')->inCity($this->city)->organization($this->school)->style($this->style)->level($this->level)->get();
        // $this->sunday       = Course::dayOfWeek('sunday')->inCity($this->city)->organization($this->school)->style($this->style)->level($this->level)->get();
    }

    public function mount()
    {
        $this->loadClasses();
    }

    public function classQuery($day, $time)
    {
        // if ($this->level) {
        //     dd($this->level);    # code...
        // }
    
        return Course::isActive()
                        ->dayOfWeek($day)
                        ->inCity($this->city)
                        ->organization($this->school)
                        ->style($this->style)
                        ->level('intermediate')
                        ->orderBy($time,'asc')
                        ->get();
    }

    public function render()
    {
        return view('livewire.schedule.catalogue');
    }
}
