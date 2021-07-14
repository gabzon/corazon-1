<?php

namespace App\View\Components\Organization;

use App\Models\Organization;
use Illuminate\View\Component;

class DescriptionCard extends Component
{
    public Organization $organization;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Organization $org)
    {
        $this->organization = $org;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.organization.description-card');
    }
}
