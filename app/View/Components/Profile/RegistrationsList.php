<?php

namespace App\View\Components\Profile;

use App\Contracts\Registrable;
use App\Models\User;
use Illuminate\View\Component;

class RegistrationsList extends Component
{
    public $list;

    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($list, User $user = null)
    {    
        $this->list = $list; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.profile.registrations-list');
    }
}
