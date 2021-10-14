<?php

namespace App\Http\Livewire\Schedule;

use Livewire\Component;

class SchoolCard extends Component
{
    public $class;
    public $time;
    public $day;
    
    public function mount($class, $day)
    {
        $this->class = $class;   
        $this->day = $day;     
        $this->time = $this->getTime($this->day);
    }

    public function getTime($day)
    {
        if ($day == 'monday') {
            return date('H:i', strtotime($this->class->start_time_mon)) .'-'. date('H:i', strtotime($this->class->end_time_mon));
        }
        if ($day == 'tuesday') {
            return date('H:i', strtotime($this->class->start_time_tue)) .'-'. date('H:i', strtotime($this->class->end_time_tue));
        }
        if ($day == 'wednesday') {
            return date('H:i', strtotime($this->class->start_time_wed)) .'-'. date('H:i', strtotime($this->class->end_time_wed));
        }
        if ($this->class->thursday) {
            return date('H:i', strtotime($this->class->start_time_thu)) .'-'. date('H:i', strtotime($this->class->end_time_thu));
        }
        if ($this->class->friday) {
            return date('H:i', strtotime($this->class->start_time_fri)) .'-'. date('H:i', strtotime($this->class->end_time_fri));
        }
        if ($this->class->saturday) {
            return date('H:i', strtotime($this->class->start_time_sat)) .'-'. date('H:i', strtotime($this->class->end_time_sat));
        }
        if ($this->class->sunday) {
            return date('H:i', strtotime($this->class->start_time_sun)) .'-'. date('H:i', strtotime($this->class->end_time_sun));
        }
    }

    public function render()
    {
        return view('livewire.schedule.school-card');
    }
}
