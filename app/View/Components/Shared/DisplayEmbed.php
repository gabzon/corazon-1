<?php

namespace App\View\Components\Shared;

use Illuminate\View\Component;

class DisplayEmbed extends Component
{
    public $embed;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($embed)
    {
        $this->embed = $embed;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.shared.display-embed');
    }
}
