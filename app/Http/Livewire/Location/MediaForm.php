<?php

namespace App\Http\Livewire\Location;

use App\Models\Location;
use Livewire\Component;
use Spatie\MediaLibraryPro\Http\Livewire\Concerns\WithMedia;

class MediaForm extends Component
{
    use WithMedia;

    public Location $location;
    
    public $mediaComponentNames = ['photos'];

    public $photos;

    protected $rules = ['location.video' => 'nullable'];
    
    public function save()
    {
        $this->validate();
        
        $this->location->save();
        
        $this->location->addFromMediaLibraryRequest($this->photos)->toMediaCollection('location-photos');
        
        session()->flash('success', 'Video updated successfully!');

        $this->clearMedia();
    }

    public function mount(Location $location = null)
    {
        $this->location = $location;
    }

    public function render()
    {
        return view('livewire.location.media-form');
    }
}
