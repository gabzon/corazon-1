<?php

namespace App\Http\Livewire\Organization\Form;

use App\Models\Organization;
use Livewire\Component;

class AddressForm extends Component
{
    public Organization $organization;

    protected $rules = [
        'organization.address'      => 'nullable|string',
        'organization.zip'          => 'nullable|string',
        'organization.address_info' => 'nullable|string',
        'organization.lat'          => ['nullable','regex:/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$/'],
        'organization.lng'          => ['nullable','regex:/^[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$/'],
    ];

    public function save()
    {
        $this->validate();

        $this->organization->save();

        session()->flash('success','Address saved successfully!');
    }

    public function mount(Organization $organization)
    {
        if ($organization->exists) {
            $this->organization = $organization;
        }
    }

    public function render()
    {
        return view('livewire.organization.form.address-form');
    }
}
