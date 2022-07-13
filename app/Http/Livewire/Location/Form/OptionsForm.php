<?php

namespace App\Http\Livewire\Location\Form;

use App\Models\Location;
use Livewire\Component;

class OptionsForm extends Component
{
    public Location $location;

    protected $rules = [
        'location.has_sink'         => 'nullable|boolean',
        'location.has_bar'          => 'nullable|boolean',
        'location.has_fridge'       => 'nullable|boolean',
        'location.has_hall'         => 'nullable|boolean',
        'location.has_changeroom'   => 'nullable|boolean',
        'location.has_lockers'      => 'nullable|boolean',
        'location.has_wc'           => 'nullable|boolean',
        'location.has_separate_wc'  => 'nullable|boolean',
        'location.has_shower'       => 'nullable|boolean',            
        'location.has_parking'      => 'nullable|boolean',
        'location.has_parking_bike' => 'nullable|boolean',
        'location.parking'          => 'nullable|string|max:30',
    ];

    public function save()
    {
        $this->validate();
        $this->location->save();
        session()->flash('success','Location options saved successfully!');
    }

    public function mount(Location $location)
    {
        if ($location->exists) {
            $this->location = $location;
        }
    }

    public function render()
    {
        return view('livewire.location.form.options-form');
    }
}