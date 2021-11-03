<?php

namespace App\View\Components\Shared;

use Illuminate\View\Component;

class StatusBadge extends Component
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
                $this->styles = 'bg-green-100 text-green-800';
                break;
            case 'draft':                
                $this->styles = 'bg-blue-100 text-blue-800';
                break;
            case 'review':
                $this->styles = 'bg-indigo-100 text-indigo-800';
                break;
            case 'finished':
                $this->styles = 'bg-red-100 text-red-800';
                break;
            case 'postpone':
                $this->styles = 'bg-yellow-100 text-yellow-800';
                break;
            case 'canceled':
                $this->styles = 'bg-gray-100 text-gray-800';
                break; 
            case 'soon':
                $this->styles = 'bg-lime-100 text-lime-800';
                break;            
            default:
                $this->styles = 'bg-cool-gray-100 text-cool-gray-800';
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
        return view('components.shared.status-badge');
    }
}




