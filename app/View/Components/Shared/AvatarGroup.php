<?php

namespace App\View\Components\Shared;

use Illuminate\View\Component;

class AvatarGroup extends Component
{
    public $model;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.shared.avatar-group');
    }
}
