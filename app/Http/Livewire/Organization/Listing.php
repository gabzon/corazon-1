<?php

namespace App\Http\Livewire\Organization;

use App\Models\City;
use App\Models\Style;
use App\Models\Organization;
use Livewire\Component;
use Livewire\WithPagination;

class Listing extends Component
{
    use WithPagination;
    
    public String $type;    
    public $showList = false;
    public $showStyleList = false;
    public $city;
    public $style;
    public $search;

    protected $listeners = ['selectedCity' => 'selectCity', 'selectedStyle' => 'selectStyle'];

    public function selectCity(City $city)
    {        
        $this->city = $city;                
        $this->showList = false; 
    }

    public function selectStyle(Style $style)
    {        
        $this->style = $style;                
        $this->showStyleList = false;    
        $this->styleName = $style->name;    
    }

    public function resetSchoolList()
    {
        $this->city = null;
        $this->style = null;
        $this->search = '';
        $this->emit('resetSchoolList');        
    }

    public function updating($name, $value)
    {
        $this->resetPage();
    }

    public function mount(String $type = 'school')
    {
        $this->type = $type;
    }
    
    public function render()
    {
        $cityId = null;
        $styleId = null;
        if ($this->city != null) {
            $cityId = $this->city->id; 
        }
        if ($this->style != null) {
            $styleId = $this->style->id;
        }        
        
        $schools = Organization::where('type', $this->type)->where('name','LIKE','%'. $this->search .'%')->inCity($cityId)->Style($styleId)->orderBy('name','asc')->paginate(15);
        
        return view('livewire.organization.listing', [
            'schools' => $schools,                         
        ]);
    }
}