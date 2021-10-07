<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class MediaLibrary extends Component
{
    public $name, $model, $collection;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $model, $collection)
    {        
        $this->name = $name;
        $this->model = $model;
        $this->collection = $collection;        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.media-library');
    }
}
