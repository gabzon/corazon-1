<?php

namespace App\View\Components\UI;

use Illuminate\View\Component;

class Button extends Component
{
    public $route;
    public $color = 'primary';
    public $size = 'md';
    public $shape = 'rounded-md';
    public $css = '';
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $color = 'primary', $size = 'md', $shape = 'rounded-md', $css = '')
    {
        $this->route = $route;
        $this->shape = $shape;
        $this->defineColor($color);
        $this->defineSize($size);
        $this->shape = $shape;
        $this->css = $css;
    }

    private function defineColor($color)
    {
        switch ($color) {
            case 'primary':
                $this->color = 'border-transparent text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500';
                break;
            case 'secondary':
                $this->color = 'border-gray-300 text-gray-700 bg-white hover:bg-gray-50 focus:ring-indigo-500';
                break;
            default:
                $this->color = 'border-transparent text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500';
                break;
        }
    }

    private function defineSize($size)
    {
        switch ($size) {
            case 'xs':
                $this->size = 'px-2.5 py-1.5 text-xs';
                break;
            case 'sm':
                $this->size = 'px-3 py-2 text-sm';
                break;
            case 'md':
                $this->size = 'px-4 py-2 text-sm';
                break;
            case 'lg':
                $this->size = 'px-4 py-2 text-base';
                break;
            case 'xl':
                $this->size = 'px-6 py-3 text-base';
                break;            
            default:
                $this->size = 'px-4 py-2 text-sm';
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
        return view('components.ui.button');
    }
}