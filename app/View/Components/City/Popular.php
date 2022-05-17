<?php

namespace App\View\Components\City;

use App\Models\City;
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

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.city.popular', [
            'cities' => City::with(['media'])->has('events')->withCount('events')->orderBy('events_count', 'desc')->take(6)->get()
        ]);
    }
}