<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class SearchInput extends Component
{
    public ?string $name;
    public ?string $label;
    public ?string $description;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(?string $name, ?string $label = null, ?string $description = null)
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
        return view('components.form.search-input');
    }
}
