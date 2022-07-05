<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class MediaLibraryMultiple extends Component
{
    public $name; 
    public $model;
    public String $collection;
    public String $label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $model, $collection, $label = 'Images')
    {
        $this->name = $name;
        $this->model = $model;
        $this->collection = $collection;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.media-library-multiple');
    }
}
