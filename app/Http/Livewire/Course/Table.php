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
    public string $status = '';
    public int|string $style = '';
    public int|string $organization = '';
    public int|string $city = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatedStyle($v)
    {                
        $this->style = $v;
    }

    public function updatedStatus($v)
    {
        $this->status = $v;
    }

    public function render()
    {
        return view('livewire.course.table', [
            'courses' => Course::where('name', 'like', '%'. $this->search .'%')
                                ->with(['styles'])
                                ->style($this->style)
                                ->DayOfWeek($this->day)
                                ->level($this->level)
                                ->status($this->status)
                                ->inCity($this->city)
                                ->latest()
                                ->paginate(10)
        ]);
    }
}
