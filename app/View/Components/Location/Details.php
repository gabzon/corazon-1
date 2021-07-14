<?php

namespace App\View\Components\Location;

use App\Models\Location;
use Illuminate\View\Component;

class Details extends Component
{
    public Location $location;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Location $location)
    {
        $this->location = $location;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.location.details');
    }
}
