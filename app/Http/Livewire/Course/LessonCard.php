<?php

namespace App\Http\Livewire\Course;

use App\Models\Lesson;
use Livewire\Component;

class LessonCard extends Component
{
    public Lesson $lesson;
    
    public function mount(Lesson $lesson)
    {
        $this->lesson = $lesson;
    }
    public function render()
    {
        return view('livewire.course.lesson-card');
    }
}
