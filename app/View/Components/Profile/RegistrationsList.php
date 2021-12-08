<?php

namespace App\View\Components\Profile;

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
    public function __construct(User $user)
    {
        $this->list = $user->registrations()->paginate(10);        
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
