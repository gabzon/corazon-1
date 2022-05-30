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
    public $cityName;
    public $styleName;

    public function selectCity(City $city)
    {        
        $this->city = $city;                
        $this->showList = false;    
        $this->cityName = $city->name;    
    }

    public function selectStyle(Style $style)
    {        
        $this->style = $style;                
        $this->showStyleList = false;    
        $this->styleName = $style->name;    
    }

    public function searchCityByName()
    {
        $this->city = City::where('name','LIKE', '%' . $this->cityName . '%')->first();        
    }

    public function resetSchoolList()
    {
        $this->city = null;
        $this->style = null;
        $this->cityName = null;
        $this->styleName = null;
    }

    public function searchStyleByName()
    {
        $this->city = Style::where('name','LIKE', '%' . $this->styleName . '%')->first();        
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

        $cities = City::has('organizations')->orderBy('name','asc');
        
        if (!empty($this->cityName)) {            
            $cities->where('name', 'LIKE', '%' . $this->cityName . '%');            
        }
        
        $schools = Organization::where('type', $this->type)->inCity($cityId)->Style($styleId)->inRandomOrder()->paginate(15);
        
        return view('livewire.organization.listing', [
            'schools' => $schools,
            'cities' => $cities->get(),
            'styles' => Style::has('organizations')->where('name', 'LIKE', '%' . $this->styleName . '%')->orderBy('name','asc')->get(), 
        ]);
    }
}