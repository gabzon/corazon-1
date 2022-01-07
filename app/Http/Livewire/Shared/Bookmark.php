<?php

namespace App\Http\Livewire\Shared;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class Bookmark extends Component
{
    use AuthorizesRequests;
    public $model;
    public $withCount;
    public bool $refreshPage = false;

    public function bookmark()
    {                        
        $this->authorize('bookmark', $this->model);

        auth()->user()->bookmark($this->model);
        
        if ($this->refreshPage) {            
            return redirect(request()->header('Referer'));        
        } 
    }

    public function unbookmark()
    {
        $this->authorize('unbookmark', $this->model);
        
        auth()->user()->unbookmark($this->model);
        if ($this->refreshPage) {            
            return redirect(request()->header('Referer'));        
        } 
    }
    
    public function mount($model, $withCount = false)
    {
        $this->model = $model;
        $this->withCount = $withCount;
        if (request()->routeIs('dashboard')) {
            $this->refreshPage = true;   
        }  
    }

    public function render()
    {
        return view('livewire.shared.bookmark');
    }
}

