<?php

namespace App\Http\Livewire\Catalogue;

use Livewire\Component;

class CourseCard extends Component
{
    public $class;
    public $time;

    public function mount($class, $day=null)
    {
        $this->class = $class;
        $this->time = $this->getTime();
    }

    public function getTime()
    {
        if ($this->class->monday) {
            return date('H:i', strtotime($this->class->start_time_mon)) .'-'. date('H:i', strtotime($this->class->end_time_mon));
        }
        if ($this->class->tuesday) {
            return date('H:i', strtotime($this->class->start_time_tue)) .'-'. date('H:i', strtotime($this->class->end_time_tue));
        }
        if ($this->class->wednesday) {
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
        return view('livewire.catalogue.course-card');
    }
}
