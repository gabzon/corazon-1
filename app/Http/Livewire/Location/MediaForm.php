<?php

namespace App\Http\Livewire\Location;

use App\Models\Location;
use Livewire\Component;
use Spatie\MediaLibraryPro\Http\Livewire\Concerns\WithMedia;

class MediaForm extends Component
{
    use WithMedia;

    public Location $location;
    
    public $mediaComponentNames = ['photos','contract', 'logo', 'icon', 'facade'];
    public $photos;
    public $contract;
    public $logo;
    public $icon;
    public $facade;

    protected $rules = [        
        'location.video'    => 'nullable',        
    ];
    
    public function save()
    {
        $this->validate();
        
        $this->location->save();
        
        if ($this->photos) {
            $this->location->addFromMediaLibraryRequest($this->photos)->toMediaCollection('location-photos');
        }
        
        if ($this->contract) {
            $this->location->addFromMediaLibraryRequest($this->contract)
            ->toMediaCollection('location-contracts');
        }

        if ($this->logo) {
            $this->location->addFromMediaLibraryRequest($this->logo)->toMediaCollection('location-logo');
            $this->location->logo = $this->location->getMedia('location-logo')->last()->getUrl();            
        }

        if ($this->icon) {
            $this->location->addFromMediaLibraryRequest($this->icon)->toMediaCollection('location-icon');
        }

        if ($this->facade) {
            $this->location->addFromMediaLibraryRequest($this->facade)->toMediaCollection('location-facade');
            $this->location->facade = $this->location->getMedia('location-facade')->last()->getUrl();
        }
        
        session()->flash('success', 'Media saved successfully!');

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
