<?php

namespace App\View\Components\Location;

use App\Models\Location;
use Illuminate\View\Component;

class Map extends Component
{
    public Location $location;
    public $photos;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Location $location, $photos = null)
    {
        $this->location = $location;
        $this->photos = $photos;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.location.map');
    }
}
