<?php

namespace App\View\Components\Shared;

use Illuminate\View\Component;

class RegisterLikeBookmarkButtons extends Component
{
    public $model;
    public string $size;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($model, string $size = 'large')
    {
        $this->model = $model;
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.shared.register-like-bookmark-buttons');
    }
}
