<?php

namespace App\Http\Livewire\Organization;

use App\Models\Organization;
use Livewire\Component;
use Illuminate\Support\Str;
use Spatie\MediaLibraryPro\Http\Livewire\Concerns\WithMedia;

class Form extends Component
{    
    use WithMedia;
    public $action = 'store';
    public Organization $organization;
    public $country;
    
    public $mediaComponentNames = ['logo', 'icon'];
    
    public $logo;
    public $icon;
    
    protected $rules = [
        'organization.name'         => 'required',
        'organization.slug'         => 'required',
        'organization.about'        => 'nullable',
        
        'organization.contact'      => 'nullable',
        'organization.email'        => 'nullable|email',
        'organization.phone'        => 'nullable',
        'organization.website'      => 'nullable|url',
        
        'organization.oid'          => 'nullable',
        'organization.status'       => 'required',
        'organization.type'         => 'required',
                        
        'organization.city_id'      => 'required',
        'organization.zip'          => 'nullable',
        'organization.address'      => 'nullable',
        'organization.address_info' => 'nullable',
        'organization.lat'          => 'nullable',
        'organization.lng'          => 'nullable',

        'organization.facebook'     => 'nullable',
        'organization.twitter'      => 'nullable',
        'organization.instagram'    => 'nullable',
        'organization.youtube'      => 'nullable',
        'organization.tiktok'       => 'nullable',

        'organization.video'        => 'nullable',
        'organization.logo'         => 'nullable',
        
        'organization.user_id'      => 'nullable',
    ];

    public function save()
    {
        $this->validate();

        $this->organization->save();
        
        // dd(array_pop($this->logo));
        $this->organization->addFromMediaLibraryRequest($this->logo)->toMediaCollection('organization-logos','public');
        $this->organization->addFromMediaLibraryRequest($this->icon)->toMediaCollection('organization-icons','public');
        // $this->organization->addMedia(array_pop($this->logo))->withResponsiveImages()->toMediaCollection('organizations','public');

        $this->organization->save();
        //$this->organization->logo = $this->organization->getMedia('organizations')->last()->getUrl();        

        session()->flash('success', 'Organization saved successfully');
        
        $this->clearMedia();
        
        return redirect()->route('organization.index');
    }

    public function updatedOrganizationName($value)
    {        
        $this->organization->slug = Str::slug($value . '-' . \Carbon\Carbon::now()->timestamp,'-'); 
    }

    public function mount(Organization $organization = null)
    {
        if ($organization->exists) {
            $this->organization = $organization;
            $this->action = 'update';
        } else {
            $this->organization = new Organization;
            $this->organization->type = '';
            $this->organization->status = '';
            $this->organization->user_id = auth()->user()->id;
        }
    }

    public function render()
    {
        return view('livewire.organization.form');
    }
}