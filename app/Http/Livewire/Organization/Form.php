<?php

namespace App\Http\Livewire\Organization;

use App\Models\Organization;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;
    public $action = 'store';
    public $organization;

    public $name;
    public $slug;
    public $video;
    public $logo;
    public $about;
    public $contact;
    public $email;
    public $phone;
    public $website;
    public $company_ref;
    public $facebook;
    public $twitter;
    public $instagram;
    public $youtube;
    public $tiktok;
    public $status = '';
    public $type = '';
    public $address;
    public $address_info;
    public $postal_code;
    public $city;
    public $state;
    public $country = '';
    public $lat;
    public $lng; 
    public $city_id = '';

    public function store()
    {
        
        Organization::create([
            'name'          => $this->name,
            'slug'          => $this->slug,
            'video'         => $this->video,
            'logo'          => $this->logo,
            'about'         => $this->about,
            'contact'       => $this->contact,
            'email'         => $this->email,
            'phone'         => $this->phone,
            'website'       => $this->website,
            'company_ref'   => $this->company_ref,
            'facebook'      => $this->facebook,
            'twitter'       => $this->twitter,
            'instagram'     => $this->instagram,
            'youtube'       => $this->youtube,
            'tiktok'        => $this->tiktok,
            'status'        => $this->status,
            'type'          => $this->type,
            'address'       => $this->address,
            'address_info'  => $this->address_info,
            'postal_code'   => $this->postal_code,
            'city'          => $this->city,
            'state'         => $this->state,
            'country'       => $this->country,
            'lat'           => $this->lat,
            'lng'           => $this->lng,
            'user_id'       => auth()->user()->id,
            'city_id'       => $this->city_id,
        ]);

        session()->flash('success', 'Organization created successfully');
        
        return redirect()->route('organization.index');
    }

    public function update()
    {
        $this->organization->update([
            'name'          => $this->name,
            'slug'          => $this->slug,
            'video'         => $this->video,
            'logo'          => $this->logo,
            'about'         => $this->about,
            'contact'       => $this->contact,
            'email'         => $this->email,
            'phone'         => $this->phone,
            'website'       => $this->website,
            'company_ref'   => $this->company_ref,
            'facebook'      => $this->facebook,
            'twitter'       => $this->twitter,
            'instagram'     => $this->instagram,
            'youtube'       => $this->youtube,
            'tiktok'        => $this->tiktok,
            'status'        => $this->status,
            'type'          => $this->type,
            'address'       => $this->address,
            'address_info'  => $this->address_info,
            'postal_code'   => $this->postal_code,
            'city'          => $this->city,
            'state'         => $this->state,
            'country'       => $this->country,
            'lat'           => $this->lat,
            'lng'           => $this->lng,
            'user_id'       => auth()->user()->id,
            'city_id'       => $this->city_id,
        ]);

        session()->flash('success', 'Organization updated successfully');
        
        return redirect()->route('organization.index');
    }

    public function updatedName($value)
    {
        $this->slug = Str::slug($value . '-' . \Carbon\Carbon::now()->timestamp,'-'); 
    }

    public function mount($organization = null)
    {
        if ($organization) {
            $this->action = 'update';
            $this->organization = $organization;
            $this->name = $organization->name;
            $this->slug = $organization->slug;
            $this->video = $organization->video;
            $this->logo = $organization->logo;
            $this->about = $organization->about;
            $this->contact = $organization->contact;
            $this->email = $organization->email;
            $this->phone = $organization->phone;
            $this->website = $organization->website;
            $this->company_ref = $organization->company_ref;
            $this->facebook = $organization->facebook;
            $this->twitter = $organization->twitter;
            $this->instagram = $organization->instagram;
            $this->youtube = $organization->youtube;
            $this->tiktok = $organization->tiktok;
            $this->status = $organization->status;
            $this->type = $organization->type;
            $this->address = $organization->address;
            $this->address_info = $organization->address_info;
            $this->postal_code = $organization->postal_code;
            $this->city = $organization->city;
            $this->state = $organization->state;
            $this->country = $organization->country;
            $this->lat = $organization->lat;
            $this->lng = $organization->lng;
            $this->user_id = $organization->user_id;
            $this->city_id = $organization->city_id;
        }
    }

    public function render()
    {
        return view('livewire.organization.form');
    }
}