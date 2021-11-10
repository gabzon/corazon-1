<?php

namespace App\Http\Livewire\City;

use App\Models\City;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public array $searchColumns = [
        'name'      => '',
        'state'     => '',
        'region'    => '',
        'country'   => '',
    ];

    public function updating($value, $name)
    {
        $this->resetPage();
    }

    public function render()    
    {
        $cities = City::with(['events','courses'])
                        ->select(['id', 'name', 'state', 'region', 'country']);

        foreach ($this->searchColumns as $column => $value) {
            if (!empty($value)) {
                if ($column == 'name') {
                    $cities->where('name' , 'LIKE', '%' . $value . '%');
                }
                if ($column == 'state') {
                    $cities->where('state' , 'LIKE', '%' . $value . '%');
                }
                if ($column == 'region') {
                    $cities->where('region' , 'LIKE', '%' . $value . '%');
                }
                if ($column == 'country') {
                    $cities->where('country' , 'LIKE', '%' . $value . '%');
                }
            }
        }
        
        return view('livewire.city.table', [
            'cities' => $cities->paginate(10)
        ]);
    }
}









