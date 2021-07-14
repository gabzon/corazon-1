<?php

namespace App\Http\Livewire\Location;

use App\Models\Location;
use Livewire\Component;

class AddressForm extends Component
{
    public Location $location;
    public int $city;
    public string $neighborhood;
    public string $postal_code;
    public string $address;
    public string $address_info;
    public string $entry_code;
    public string $google_maps;
    public string $google_maps_shortlink;
    public string $public_transportation;

    public function update()
    {
        $this->location->update([
            'city_id'       => $this->city,
            'neighborhood'  => $this->neighborhood,
            'postal_code'   => $this->postal_code,
            'address'       => $this->address,
            'address_info'  => $this->address_info,
            'entry_code'    => $this->entry_code,
            'google_maps'   => $this->google_maps,
            'google_maps_shortlink' => $this->google_maps_shortlink,
            'public_transportation' => $this->public_transportation,
        ]);

        session()->flash('success', 'Address information updated successfully!');
    }

    public function mount(Location $location)
    {
        if ($location->exists) {
            $this->location     = $location;
            $this->city         = $location->city_id ?? 0;
            $this->neighborhood = $location->neighborhood ?? '';
            $this->postal_code  = $location->postal_code ?? '';
            $this->address      = $location->address ?? '';
            $this->address_info = $location->address_info ?? '';
            $this->entry_code   = $location->entry_code ?? '';
            $this->google_maps  = $location->google_maps ?? '';
            $this->google_maps_shortlink = $location->google_maps_shortlink ?? '';
            $this->public_transportation = $location->public_transportation ?? '';
        }
    }

    public function render()
    {
        return view('livewire.location.address-form');
    }
}


