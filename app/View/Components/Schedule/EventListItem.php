<?php

namespace App\View\Components\Schedule;

use App\Models\Event;
use Illuminate\View\Component;

class EventListItem extends Component
{
    public Event $item;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Event $event)
    {
        $this->item = $event;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.schedule.event-list-item');
    }
}
