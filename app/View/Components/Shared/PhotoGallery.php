<?php

namespace App\View\Components\Shared;

use Illuminate\View\Component;

class PhotoGallery extends Component
{
    public $photos;
    public $label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($photos, $label = null)
    {
        $this->photos = $photos;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.shared.photo-gallery');
    }
}
