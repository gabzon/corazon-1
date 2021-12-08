<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class EmailInput extends Component
{
    public $label;
    public $name;
    public $description;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label = null, $description =  null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.email-input');
    }
}