<?php

namespace App\Http\Livewire\Course;

use App\Models\Course;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;    

    public int|string $style = '';
    public string|null $day = '';

    public array $filterColumns = [
        'name'          => '',                
        'level'         => '',
        'organization'  => 0,
        'status'        => '',
        'city'          => 0,
    ];
    
    public function updating($name, $value)
    {                
        $this->resetPage();        
    }

    public function render()
    {
        $courses = Course::with(['styles'])
                            ->style($this->style)
                            ->DayOfWeek($this->day)
                            ->latest();

        foreach ($this->filterColumns as $column => $value) {
            if (!empty($value)) {
                if ($column == 'name') {                    
                    $courses->where('name', 'LIKE', '%' . $value . '%');     
                }else if ($column == 'level') {
                    $courses->where('level', $value);
                }else if ($column == 'organization') {
                    $courses->where('organization_id', $value);
                } else if ($column == 'city'){
                    $courses->where('city_id',$value);
                } else {
                    $courses->where('status', $value);
                }                              
            }
        }

        return view('livewire.course.table', [
            'courses' => $courses->paginate(10),
        ]);
    }
}
