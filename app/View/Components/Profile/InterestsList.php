<?php

namespace App\View\Components\Profile;

use App\Models\User;
use Illuminate\View\Component;

class InterestsList extends Component
{
    public $list;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {                
        $this->list = $user->interests;        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.profile.interests-list');
    }
}
