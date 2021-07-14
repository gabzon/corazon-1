<?php

namespace App\View\Components\Partials;

use Illuminate\View\Component;

class SortIcon extends Component
{
    public $icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($field = null, $direction)
    {
        $this->field        = $field;
        if ($field) {
            if ($direction == 'desc') {
                $this->icon = 'icons.sort-alpha-up-alt';
            }else{
                $this->icon = 'icons.sort-alpha-down';
            }
        }else{
            $this->icon = 'icons.arrow-up-down';
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.partials.sort-icon');
    }
}
