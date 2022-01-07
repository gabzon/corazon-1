<?php

namespace App\Http\Livewire\Shared;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Livewire\Component;

class Like extends Component
{
    use AuthorizesRequests;
    public $model;
    public bool $withCount;
    public bool $refreshPage = false;

    public function like()
    {        
        $this->authorize('like', $this->model);
        auth()->user()->like($this->model);
        
        if ($this->refreshPage) {            
            return redirect(request()->header('Referer'));        
        }               
        
    }

    public function unlike()
    {
        $this->authorize('unlike', $this->model);
        auth()->user()->unlike($this->model);
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
        return view('livewire.shared.like');
    }
}