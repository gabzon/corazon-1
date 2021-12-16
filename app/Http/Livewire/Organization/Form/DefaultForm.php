<?php

namespace App\Http\Livewire\Organization\Form;

use App\Models\City;
use App\Models\Organization;
use Livewire\Component;
use Illuminate\Support\Str;

class DefaultForm extends Component
{
    public Organization $organization;
    public string $action;
    public string $cityName = '';

    protected $rules = [
        'organization.city_id'  => 'required',
        'organization.name'     => 'required|string|min:3',
        'organization.slug'     => 'nullable',
        'organization.shortname'=> 'nullable|string',
        'organization.status'   => 'required|string',
        'organization.type'     => 'required|string',
        'organization.user_id'  => 'nullable',
        'organization.contact'  => 'nullable|string',
        'organization.phone'    => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'organization.email'    => 'nullable|email',
        'organization.oid'      => 'nullable|string',
        'organization.website'  => 'nullable|url',
    ];

    public function updatedOrganizationCityId($value)
    {
        if ($value == "") {
            return ;
        }
                
        $city = City::findOrFail($value);            
        $this->cityName = $city->name;         
         
        $this->organization->slug = Str::slug($this->cityName,'-') . "-" . Str::slug($this->organization->name);
    }

    public function updatedOrganizationName()
    {
        $this->organization->slug = Str::slug($this->cityName,'-') . "-" . Str::slug($this->organization->name,'-');
    }

    public function save()
    {
        $this->validate();

        if ($this->action == 'store') {
            $this->organization->user_id = auth()->user()->id;
        }
        
        $this->organization->save();

        session()->flash('success','Organization saved successfully!');

        if ($this->action == 'store') {
            return redirect()->route('organization.edit', $this->organization);
        }
    }

    public function mount(Organization|null $organization = null)
    {
        if ($organization->exists) {
            $this->organization = $organization;   
            $this->action = 'update';         
        }else{
            $this->organization = new Organization();
            $this->action = 'store';
        }
    }
    public function render()
    {
        return view('livewire.organization.form.default-form');
    }
}