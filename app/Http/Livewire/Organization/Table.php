<?php

namespace App\Http\Livewire\Organization;

use App\Models\Organization;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public array $filterColumns = [
        'name'      => '',
        'contact'   => '',
        'email'     => '',
        'type'      => '',
        'city'      => 0,
    ];

    public function updating($name, $value)
    {
        $this->resetPage();
    }

    public function render()
    {
        $organizations = Organization::with(['city:id,name,country'])->select(['id', 'name', 'slug','contact', 'type', 'email', 'status', 'city_id'])->latest();

        foreach ($this->filterColumns as $column => $value) {
            if (!empty($value)) {
                if ($column == 'name') {
                    $organizations->where('name', 'LIKE', '%' . $value . '%');
                } else if ($column == 'contact') {
                    $organizations->where('contact', 'LIKE', '%' . $value . '%');                                    
                } else if ($column == 'email'){
                    $organizations->where('email','LIKE', '%' . $value . '%');
                } else if ($column == 'city') {
                    $organizations->where('city_id',$value);
                }
            }
        }

        return view('livewire.organization.table', [
            'collection' => $organizations->paginate(10),
        ]);
    }
}