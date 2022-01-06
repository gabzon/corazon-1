<?php

namespace App\View\Components\Shared;

use Illuminate\View\Component;

class LevelTip extends Component
{
    public string $level;
    public string $info;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $level)
    {
        $this->level = $level;
        switch ($this->level) {
            case 'op':
                $this->info = 'Open to anyone';
                break;
            case 'a1':
                $this->info = 'Complete beginner';
                break;
            case 'a2':
                $this->info = 'Medium Beginner';
                break;
            case 'a3':
                $this->info = 'High Beginner';
                break;
            case 'b1':
                $this->info = 'Intermediate';
                break;
            case 'b2':
                $this->info = 'Medium Intermediate';
                break;
            case 'b3':
                $this->info = 'High Intermediate';
                break;
            case 'c1':
                $this->info = 'Advanced';
                break;  
            case 'c2':
                $this->info = 'Medium Advanced';
                break;                 
            case 'c3':
                $this->info = 'Advanced Advanced';
                break;                 
            case 'd1':
                $this->info = 'Master';
                break;                 
            case 'e1':
                $this->info = 'Pro';
                break;            
            default:
                $this->info = 'Open to anyone';
                break;
        }
        $this->info;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.shared.level-tip');
    }
}
