<?php

namespace App\Http\Livewire\Location;

use App\Models\Location;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;  

    public array $filterColumns = [
        'name'      => '',
        'type'      => '',
        'email'     => '',
        'city'      => 0,
    ];

    public function updating($name, $value)
    {
        $this->resetPage();
    }

    public function render()
    {       
        $locations = Location::with(['spaces','city:id,name,country'])
                                ->select(['id','name','type', 'contact','email','city_id'])
                                ->latest();

        foreach ($this->filterColumns as $column => $value) {
            if (!empty($value)) {
                if ($column == 'name') {
                    $locations->where('name', 'LIKE', '%' . $value . '%');
                } else if ($column == 'type') {
                    $locations->where('type', $value);                                    
                } else if ($column == 'email'){
                    $locations->where('email','LIKE', '%' . $value . '%');
                } else if ($column == 'city') {
                    $locations->where('city_id',$value);
                }
            }
        }

        return view('livewire.location.table', [
            'locations' => $locations->paginate(10)
        ]);
    }
}

