<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class LocationType extends Component
{
    public $name;
    public bool $withLabel;

    public function __construct($name, $withLabel = true)
    {
        $this->name = $name;
        $this->withLabel = $withLabel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.location-type');
    }
}