<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;

class UserRegistrationStatusBadge extends Component
{
    public string $style;
    public string $size;
    public string $color;
    public string $info;
    public $status;

    
    public function mount($model, $user = null,  $size = null, $style = 'rounded-full')
    {        
        $this->style = $style;

        if ($user == null) {
            $user = auth()->user();
        }
        
        $this->status = $user->getRegistrationStatus($model);         

        if ($this->status != null) {
            switch ($this->status) {
                case 'pre-registered':
                    $this->color = 'bg-orange-100 text-orange-800';
                    $this->info = 'Waiting for payment to complete your registration';
                    break;    
                case 'registered':
                    $this->color = 'bg-green-700 text-green-100';
                    $this->info = 'Payment received. Your spot is saved';
                    break;    
                case 'partial':
                    $this->color = 'bg-green-200 text-green-800';
                    $this->info = 'Payment received partially. Your spot is saved';
                    break;    
                case 'open':
                    $this->color = 'bg-pink-100 text-pink-800';
                    $this->info = 'Payment is being processed. Your spot is saved';
                    break;    
                case 'standby':
                    $this->color = 'bg-blue-100 text-blue-800';
                    $this->info = 'Waiting for confirmation from organizer';
                    break; 
                case 'waiting':
                    $this->color = 'bg-blue-800 text-blue-100';
                    $this->info = 'Registrations are full, you are in the waiting list';
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