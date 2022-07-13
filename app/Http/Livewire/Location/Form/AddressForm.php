<?php

namespace App\Http\Livewire\Location\Form;

use App\Models\Location;
use Livewire\Component;

class AddressForm extends Component
{
    public Location $location;

    protected $rules = [
        'location.city_id'          => 'required',
        'location.neighborhood'     => 'nullable|string|max:50',
        'location.zip'              => 'nullable',
        'location.address'          => 'required',
        'location.address_info'     => 'nullable',
        'location.entry_code'       => 'nullable|string|20',
        'location.google_maps'      => 'nullable',        
        'location.lat'              => ['nullable','regex:/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$/'],
        'location.lng'              => ['nullable','regex:/^[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$/'],
        'location.google_maps_shortlink' => 'nullable|url',
        'location.public_transportation' => 'nullable',
    ];

    public function update()
    {
        $this->validate();

        $this->location->save();

        session()->flash('success', 'Address information updated successfully!');
    }

    public function mount(Location $location)
    {
        if ($location->exists) {
            $this->location = $location;
        }
    }

    public function render()
    {
        return view('livewire.location.form.address-form');
    }
}


