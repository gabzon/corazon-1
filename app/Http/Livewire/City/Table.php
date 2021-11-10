<?php

namespace App\Http\Livewire\City;

use App\Models\City;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public string $searchName = '';
    public string $searchState = '';
    public string $searchRegion = '';
    public string $searchCountry = '';

    public function updatingSearchName()
    {
        $this->resetPage();
    }

    public function updatingSearchState()
    {
        $this->resetPage();
    }

    public function updatingSearchRegion()
    {
        $this->resetPage();
    }

    public function updatingSearchCountry()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.city.table', [
            'cities' => City::paginate(10)
        ]);
    }
}

// where('name', 'like', '%'. $this->searchName .'%')
//                             ->where('state', 'like', '%'. $this->searchState .'%')
//                             ->where('region', 'like', '%'. $this->searchRegion .'%')
//                             ->where('country', 'like', '%'. $this->searchCountry .'%')







