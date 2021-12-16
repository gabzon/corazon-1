<?php

namespace App\Http\Livewire\Shared;

use Livewire\Component;

class SocialMediaForm extends Component
{
    public $model;
    
    protected $rules = [
        'model.website'     => 'nullable|url',
        'model.facebook'    => 'nullable|url',
        'model.twitter'     => 'nullable|url',
        'model.youtube'     => 'nullable|url',
        'model.instagram'   => 'nullable|url',
        'model.tiktok'      => 'nullable|url',
    ];

    public function save()
    {                   
        $this->validate();
        
        $this->model->save();

        session()->flash('success', class_basename($this->model) . ' saved successfully.');        
    }

    public function mount($model)
    {
        if ($model->exists) {
            $this->model = $model;            
        }  
    }

    public function render()
    {
        return view('livewire.shared.social-media-form');
    }
}