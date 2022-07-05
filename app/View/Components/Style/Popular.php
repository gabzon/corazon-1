<?php

namespace App\View\Components\Style;

use App\Models\Style;
use Illuminate\View\Component;

class Popular extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.style.popular', [
            'collection' => Style::has('events')->withCount('events')->orderBy('events_count','desc')->take(6)->get()
        ]);
    }
}

