<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;

class UserRegistrationStatusBadge extends Component
{
    public string $style;
    public string $size;
    public string $color;
    public $status;

    
    public function mount($model, $user = null,  $size = null, $style = 'rounded-full')
    {        
        $this->style = $style;

        if ($user == null) {
            $user = auth()->user();
        }
        
        if (get_class($model) == "App\Models\Event") {
            $this->status = $user->getEventRegistrationStatus($model);
        }   
        if (get_class($model) == "App\Models\Course") {
            $this->status = $user->getCourseRegistrationStatus($model);
        }    

        if ($this->status != null) {
            switch ($this->status) {
                case 'pre-registered':
                    $this->color = 'bg-orange-100 text-orange-800';
                    break;    
                case 'registered':
                    $this->color = 'bg-green-700 text-green-100';
                    break;    
                case 'partial':
                    $this->color = 'bg-green-200 text-green-800';
                    break;    
                case 'open':
                    $this->color = 'bg-pink-100 text-pink-800';
                    break;    
                case 'standby':
                    $this->color = 'bg-blue-100 text-blue-800';
                    break; 
                case 'waiting':
                    $this->color = 'bg-blue-800 text-blue-100';
                    break;        
                default:
                    $this->color = 'bg-gray-100 text-gray-800';
                    break;
            }   
        }

        switch ($size) {
            case 'small':
                $this->size = 'px-2.5 py-0.5 text-sm';
                break;
            case 'medium':
                $this->size = 'px-3 py-1 text-md';
                break;
            case 'large':
                $this->size = 'px-4 py-1 text-lg';
                break;
            default:
            $this->size = 'px-2 py-0.5 text-xs';
                break;
        }
    }

    public function render()
    {
        return view('livewire.profile.user-registration-status-badge');
    }
}