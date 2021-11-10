<?php

namespace App\View\Components\Shared;

use Illuminate\View\Component;

class DisplayMediaLibraryImage extends Component
{
    public $model;
    public string $collection;
    public string $alt;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($model, $collection, $alt = null)
    {                       
        $this->model = $model;
        $this->collection = $collection;
        
        if ($alt != null) {
            $this->alt = $alt;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.shared.display-media-library-image');
    }
}
