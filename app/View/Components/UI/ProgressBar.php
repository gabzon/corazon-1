<?php

namespace App\View\Components\UI;

use Illuminate\View\Component;

class ProgressBar extends Component
{
    public String $percentage;
    public String $color;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($percentage)
    {
        $this->percentage = $percentage;

        switch ($percentage) {
            case $percentage < '30':
                $this->color = 'red';
                break;
            case $percentage < '70':
                $this->color = 'yellow';
                break;            
            default:
                $this->color = 'green';
                break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ui.progress-bar');
    }
}
