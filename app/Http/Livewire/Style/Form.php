<?php

namespace App\Http\Livewire\Style;

use App\Models\Style;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;    

    public $action = 'store';
    public $style;
    public $name;
    public $slug;
    public $icon;
    public $color;
    public $thumbnail;
    public $thumbnailTemp;
    public $origin;
    public $family = '';
    public $music;
    public $year;
    public $video;
    public $description;
    public $user_id;

    public $familyList = [];

    public function store()
    {
        $this->validate([
            'name' => 'required|unique:styles'
        ]);
        
        $style = Style::create([
            'name'          => $this->name,
            'slug'          => $this->slug,
            'icon'          => $this->icon,
            'color'         => $this->color,            
            'origin'        => $this->origin,
            'family'        => $this->family,
            'music'         => $this->music,
            'year'          => $this->year,
            'video'         => $this->video,
            'thumbnail'     => $this->thumbnailTemp,
            'description'   => $this->description,
            'user_id'       => auth()->user()->id,
        ]);

        // if ($this->thumbnail) {                       
        //     $style->addMedia(storage_path('styles/' . $this->thumbnail))
        //           ->usingFileName('corazon-'.$this->slug)
        //           ->toMediaCollection('styles');
        // }

        session()->flash('succes','Style created succesfully!');

        return redirect()->route('style.index');
    }

    public function updatedName($value)
    {
        $this->slug = Str::slug($value,'-'); // . '-' . \Carbon\Carbon::now()->timestamp;
    }

    public function updatedThumbnail()
    {
        $this->validate([
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1024',            
        ]);
        $name = 'corazon-' . $this->slug . '-' . date('s') . '.' . $this->thumbnail->extension();
        $this->thumbnailTemp = $this->thumbnail->storeAs('styles', $name);
        $this->thumbnail = $this->thumbnailTemp;
    }

    public function update()
    {        
        $this->style->update([
            'name' => $this->name,
            'slug' => $this->slug,
            'icon' => $this->icon,
            'color' => $this->color,            
            'origin' => $this->origin,
            'family' => $this->family,
            'music' => $this->music,
            'year' => $this->year,
            'video' => $this->video,
            'description' => $this->description,            
        ]);
        
        if ($this->thumbnail != null) {
            if ($this->style->thumbnail != $this->thumbnail) {                    
                $this->style->update([
                    'thumbnail'     => $this->thumbnailTemp
                ]);            
                $this->thumbnail = $this->thumbnailTemp;
            }
        }

        // if ($this->thumbnail) {          
                                             
        //     $this->style->addMedia($this->thumbnail->getRealPath())
        //             ->usingName('corazon-'.$this->slug)
        //             ->toMediaCollection('styles');            
        // }

        session()->flash('succes','Style updated succesfully!');

        return redirect()->route('style.index');
    }

    public function mount($style = null)    
    {
        
        if ($style != null) {
            $this->action       = 'update';   
            $this->style        = $style;       
            $this->name         = $style->name;
            $this->slug         = $style->slug;
            $this->icon         = $style->icon;
            $this->color        = $style->color;
            $this->thumbnail    = $style->thumbnail;
            $this->origin       = $style->origin;
            $this->family       = $style->family;
            $this->music        = $style->music;
            $this->year         = $style->year;
            $this->video        = $style->video;
            $this->description  = $style->description;
            $this->user_id      = $style->user_id;
        }

    }

    public function render()
    {
        return view('livewire.style.form');
    }
}