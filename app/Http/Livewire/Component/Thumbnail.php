<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;
use Livewire\WithFileUploads;

class Thumbnail extends Component
{
    use WithFileUploads;
    
    public $thumbnail;
    public string $tmp = '';
    public array $file;    

    public function updatedThumbnail()
    {
        
        $this->validate([
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
        
        $this->file = [
            'path'  => $this->thumbnail->getRealPath(),
            'ext'   => $this->thumbnail->extension(),            
        ];
                
        $this->emit('thumbnail', $this->file);
    }  

    public function remove()
    {        
        $this->thumbnail = '';
        $this->tmp = '';
        $this->emit('thumbnail', [0]);
    }

    public function mount(string $image = '')
    {
        $this->tmp = $image;        
    }

    public function render()
    {
        return view('livewire.component.thumbnail');
    }
}