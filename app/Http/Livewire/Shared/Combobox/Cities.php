<?php

namespace App\Http\Livewire\Shared\Combobox;

use App\Models\City;
use Livewire\Component;

class Cities extends Component
{
    public String $label;
    public String $search = '';
    public City|null $city;
    public $showDropdown = false;
    public bool $showLabel;
    
    protected $listeners = ['resetSchoolList' => 'resetSearch'];
    
    public function resetSearch()
    {
        $this->search = '';
        $this->city = null;
    }

    public function selectCity(City $item)
    {
        $this->city = $item;        
        $this->search = $item->name;
        $this->showDropdown = false;
        $this->emit('selectedCity', $this->city);
    }

    public function mount(String $label = 'Cities', $showLabel = true)
    {
        $this->label = $label;
        $this->showLabel = $showLabel;
    }

    public function render()
    {
        return view('livewire.shared.combobox.cities', [
            'collection' => City::where('name','LIKE','%'. $this->search .'%')->orderBy('name','asc')->get()
        ]);
    }
}