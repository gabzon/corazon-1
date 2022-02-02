<?php

namespace App\Http\Livewire\Shared;

use App\Contracts\Registrable;
use App\Models\Event;
use Livewire\Component;

class RegistrationButton extends Component
{
    public Registrable $model;
    public string $size;
    public string $css;
    public bool $refreshPage = false;

    public function register()
    {                
        // $this->authorise('bookmark', $this->model);
        auth()->user()->register($this->model);
        
        if ($this->refreshPage) {            
            return redirect(request()->header('Referer'));        
        }               
        
    }

    public function unregister()
    {
        // $this->authorise('unbookmark', $this->model);
        auth()->user()->unregister($this->model);
        if ($this->refreshPage) {            
            return redirect(request()->header('Referer'));        
        } 
    }
    
    public function mount(Registrable $model, string $size = 'large')
    {
        $this->model = $model;
        $this->size = $size;
        
        if (request()->routeIs('dashboard')) {
            $this->refreshPage = true;   
        }

        switch ($this->size) {
            case 'xs':                                                      
                $this->css = 'max-w-xs flex-1 flex justify-center sm:w-full items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-indigo-600 hover:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500';
                break;
            case 'sm':
                $this->css = 'max-w-xs flex-1 flex justify-center sm:w-full items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500';
                break;
            case 'md':
                $this->css = 'max-w-xs flex-1 flex justify-center sm:w-full items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500';
                break;
            case 'lg':
                $this->css = 'max-w-xs flex-1 flex justify-center sm:w-full items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500';
                break;
            case 'xl':
                $this->css = 'max-w-xs flex-1 flex justify-center sm:w-full items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500';
                break;
            default:
                $this->css = 'max-w-xs flex-1 flex justify-center sm:w-full items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500';
                break;
        }
    }

    public function render()
    {
        return view('livewire.shared.registration-button');
    }
}
