<?php

namespace App\View\Components\Form;

use App\Models\Location;
use Illuminate\View\Component;

class LocationSelect extends Component
{
    public $name;
    public $locations;
    public $city = 0;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $city = null)
    {
        $this->name = $name;
        
        if ($city) {
            $this->city = $city;            
        };

        $this->locations = Location::all();        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.location-select');
    }
}