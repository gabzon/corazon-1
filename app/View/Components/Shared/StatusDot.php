<?php

namespace App\View\Components\Shared;

use Illuminate\View\Component;

class StatusDot extends Component
{
    public $status;
    public $styles;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($status)
    {
        $this->status = $status;
        switch ($status) {
            case 'active':
                $this->styles = 'bg-green-600';
                break;
            case 'draft':                
                $this->styles = 'bg-blue-600';
                break;
            case 'review':
                $this->styles = 'bg-indigo-600';
                break;
            case 'finished':
                $this->styles = 'bg-red-600';
                break;
            case 'postpone':
                $this->styles = 'bg-yellow-600';
                break;
            case 'canceled':
                $this->styles = 'bg-gray-600';
                break; 
            case 'soon':
                $this->styles = 'bg-lime-600';
                break;            
            default:
                $this->styles = 'bg-cool-gray-600';
                break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.shared.status-dot');
    }
}
