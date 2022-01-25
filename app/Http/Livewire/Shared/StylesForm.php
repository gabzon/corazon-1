<?php

namespace App\Http\Livewire\Shared;

use App\Models\Course;
use App\Models\Organization;
use App\Models\Style;
use Livewire\Component;

class StylesForm extends Component
{
    public $model;
    public $sid = '';
    public $styles;    

    public function add()
    {        
        if ($this->model->hasStyle($this->sid)) {            
            session()->flash('warning','This style has already been added!');
        }else{
            $this->model->styles()->attach($this->sid);
            session()->flash('success','Style added successfully!');
        }
        $this->loadList($this->model);
    }

    public function remove($id)
    {
        if ($this->model->hasStyle($id)) {                   
            $this->model->styles()->detach($id);
            session()->flash('success','Style removed successfully!');
            
        }else{
            session()->flash('warning','This style has already been added!');
        }
        $this->loadList($this->model);
    }

    public function mount($model)
    {        
        $this->loadList($model);
        $this->styles = $model->organization->styles;
    }

    public function loadList($model)
    {        
        switch (class_basename($model)) {
            case 'Course':
                $this->model = Course::with('styles')->whereId($model->id)->first();                
                break;            
            default:
                $this->model = Organization::with('styles')->whereId($model->id)->first();                
                break;
        }
    }

    public function render()
    {        
        // $modelInstance = $this->loadList($this->model);
        // $collection = $modelInstance->styles;
        return view('livewire.shared.styles-form');
    }
}
