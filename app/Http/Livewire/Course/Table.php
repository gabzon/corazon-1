<?php

namespace App\Http\Livewire\Course;

use App\Models\Course;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public string $search = '';
    public string $level = '';
    public string $day = '';
    public string $status;
    public int $style;
    public int $teacher;
    public int $city;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.course.table', [
            'courses' => Course::where('name', 'like', '%'. $this->search .'%')
                                ->DayOfWeek($this->day)
                                ->level($this->level)
                                ->paginate(10)
        ]);
    }
}
