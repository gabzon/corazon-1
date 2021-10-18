<?php

namespace App\Http\Livewire\Schedule;

use App\Models\Style;
use Livewire\Component;

class Filters extends Component
{
    public $city;
    public $style;
    public $level;
    public $school;
    public $focus;   
    public $day;       

    public function updatedCity($v)
    {
        $this->city = $v;
        $this->emit('cityUpdated', $this->city);
    }
    public function updatedStyle($v)
    {
        $this->style = $v;
        $this->emit('styleUpdated', $this->style);
    }
    
    public function updatedLevel($v)
    {
        $this->level = $v;
        $this->emit('levelUpdated', $this->level);
    }

    public function updatedSchool($v)
    {
        $this->school = $v;
        $this->emit('schoolUpdated', $this->school);
    }
    
    public function updatedFocus($v)
    {
        $this->focus = $v;
        $this->emit('focusUpdated', $this->focus);
    }

    public function updatedDay($v)
    {
        $this->day = $v;
        $this->emit('dayUpdated', $this->day);
    }

    public function render()
    {        
        return view('livewire.schedule.filters', [
            'cities'    => \App\Models\City::has('courses')->get(),
            'styles'    => Style::has('courses')->get(),
            'schools'   => \App\Models\Organization::has('courses')->orderBy('name','asc')->get(),
        ] );
    }
}
