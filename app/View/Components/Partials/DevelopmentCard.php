<?php

namespace App\View\Components\Partials;

use Illuminate\View\Component;

class DevelopmentCard extends Component
{ 
    public $description;
    public $start;
    public $duration;
    public $end;
    public $link;
    public $features;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($description = null, $start = null, $duration = null, $end = null, $link = null, $features = null)
    {        
        $this->description = $description;
        $this->start = $start;
        $this->duration = $duration;
        $this->end = $end;
        $this->link = $link;
        $this->features = $features;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.partials.development-card');
    }
}
