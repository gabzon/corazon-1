<?php

namespace App\Http\Livewire\Location\Form;

use App\Models\Location;
use Livewire\Component;

class ContactForm extends Component
{
    public Location $location;
    
    protected $rules = [
        'location.contact'      => 'nullable',
        'location.phone'        => 'nullable',
        'location.email'        => 'nullable|min:5|email',
        'location.comments'     => 'nullable',
        'location.website'      => 'nullable|url',
    ];

    public function save()
    {
        $this->validate();
        
        $this->location->save();

        session()->flash('success','Contact information saved successfully!');
    }

    public function mount(Location $location)
    {
        if ($location->exists) {
            $this->location = $location;
        }
    }

    public function render()
    {
        return view('livewire.location.form.contact-form');
    }
}
