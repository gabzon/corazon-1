<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{    
    use WithPagination;
    
    public int $city = 0;
    public $style = 0;

    public array $filterColumns = [
        'name'      => '',
        'type'      => '',
        'date'      => '',
        'city'      => 0,
        'status'    => '',
    ];

    public function updating($name, $value)
    {
        $this->resetPage();
    }

    public function mount($city = null)
    {
        $this->city = (int)$city;

    }
    
    public function render()
    {
        $events = Event::with(['city:id,name'])
                        ->select(['id','name','start_date','status', 'type', 'city_id'])
                        ->style($this->style)
                        ->inCity($this->city)
                        ->latest();

        foreach ($this->filterColumns as $column => $value) {
            if (!empty($value)) {
                if ($column == 'name') {
                    $events->where('name', 'LIKE', '%' . $value . '%');
                }else if ($column == 'type') {
                    $events->where('type', $value);
                }else if ($column == 'date') {
                    $events->whereMonth('start_date', '=' , date("m", strtotime($value)));
                } else if ($column == 'city'){
                    $events->where('city_id',$value);
                } else {
                    $events->where('status', $value);
                }                              
            }
        }

        return view('livewire.event.table', [
            'events' => $events->paginate(10)
        ]);
    }
}
