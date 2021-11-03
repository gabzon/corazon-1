<?php

namespace App\View\Components\Shared;

use Illuminate\View\Component;

class StylesList extends Component
{
    public $list;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($list)
    {
        $this->list = $list;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.shared.styles-list');
    }
}
