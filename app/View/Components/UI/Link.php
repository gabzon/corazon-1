<?php

namespace App\View\Components\UI;

use Illuminate\View\Component;

class Link extends Component
{
    public $route;
    public $css;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $css = null)
    {
        $this->route = $route;
        $this->css = $css;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ui.link');
    }
}
