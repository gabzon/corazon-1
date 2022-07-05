<?php

namespace App\View\Components\Form;

use App\Models\Space;
use Illuminate\View\Component;

class SpaceSelect extends Component
{
    public $name;
    public $spaces;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $cityId = null)
    {        
        $this->name = $name;        
        $this->spaces = Space::inCity($cityId)->get();
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.space-select');
    }
}
