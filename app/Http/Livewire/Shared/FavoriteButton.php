<?php

namespace App\Http\Livewire\Shared;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class FavoriteButton extends Component
{
    use AuthorizesRequests;
    public $model;
    public bool $withCount;
    public bool $refreshPage = false;

    public function favorite()
    {        
        $this->authorize('favorite', $this->model);
        auth()->user()->favorite($this->model);
        
        if ($this->refreshPage) {            
            return redirect(request()->header('Referer'));        
        }               
        
    }

    public function unfavorite()
    {
        $this->authorize('unfavorite', $this->model);
        auth()->user()->unfavorite($this->model);
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
        return view('livewire.shared.favorite-button');
    }
}