<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;
use PragmaRX\Countries\Package\Countries;

class CountrySelect extends Component
{
    public $countries;
    public $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name)
    {                
        $this->name = $name;
        $this->countries = config('countries');        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.country-select');
    }
}