<?php

namespace App\Http\Livewire\Location;

use App\Models\Location;
use Livewire\Component;

class SocialForm extends Component
{
    public Location $location;
    public string $facebook = '';
    public string $twitter = '';
    public string $instagram = '';
    public string $youtube = '';
    public string $tiktok = '';

    public function update()
    {
        $this->validate([
            'facebook'  => 'nullable|url',
            'twitter'   => 'nullable|url',
            'instagram' => 'nullable|url',
            'youtube'   => 'nullable|url',
            'tiktok'    => 'nullable|url',
        ]);

        $this->location->update([
            'facebook' => $this->facebook,
            'twitter' => $this->twitter,
            'instagram' => $this->instagram,
            'youtube' => $this->youtube,
            'tiktok' => $this->tiktok,            
        ]);

        session()->flash('success', 'Social media information updated successfully!');
    }

    public function mount(Location $location = null)
    {
        
        if ($location->exists) {
            $this->location     = $location;
            $this->facebook     = $location->facebook ?? '';
            $this->twitter      = $location->twitter ?? '';
            $this->instagram    = $location->instagram ?? '';
            $this->youtube      = $location->youtube ?? '';
            $this->tiktok       = $location->tiktok ?? '';
        }
    }

    public function render()
    {
        return view('livewire.location.social-form');
    }
}
