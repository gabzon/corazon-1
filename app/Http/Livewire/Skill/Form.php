<?php

namespace App\Http\Livewire\Skill;

use App\Models\Skill;
use Livewire\Component;

class Form extends Component
{
    public $skill;
    public $action = 'store';
    public $name;
    public $slug;
    public $icon;
    public $difficulty;
    public $thumbnail;
    public $description;
    public $video;

    public function store()
    {        
        $skill = Skill::create([
            'name'          => $this->name,
            'slug'          => $this->slug,
            'icon'          => $this->icon,
            'difficulty'    => $this->difficulty,            
            'description'   => $this->description,
            'video'         => $this->video,
            'user_id'       => auth()->user()->id,
        ]);

        if ($this->thumbnail) {            
            $skill->addMedia($this->thumbnail)->toMediaCollection('skills');
        }
        
        session()->flash('sucess','Skill added successfully');
        return redirect()->route('skill.index');
    }

    public function update()
    {
        $this->skill->update([            
            'name'          => $this->name,
            'slug'          => $this->slug,
            'icon'          => $this->icon,
            'difficulty'    => $this->difficulty,
            'thumbnail'     => $this->thumbnail,
            'description'   => $this->description,
            'video'         => $this->video,
        ]);    
    }

    public function mount($skill = null)
    {        
        if ($skill) {
            $this->action = 'update';
            $this->skill = $skill;
            $this->name = $skill->name;
            $this->slug = $skill->slug;
            $this->icon = $skill->icon;
            $this->difficulty = $skill->difficulty;
            $this->thumbnail = $skill->thumbnail;
            $this->description = $skill->description;
            $this->video = $skill->video;
        }
    }

    public function render()
    {
        return view('livewire.skill.form');
    }
}









