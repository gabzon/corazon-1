<?php

namespace App\Http\Livewire\Organization\Form;

use App\Models\Organization;
use Livewire\Component;
use Spatie\MediaLibraryPro\Http\Livewire\Concerns\WithMedia;

class GeneralForm extends Component
{
    use WithMedia;
    public Organization $organization;

    public $mediaComponentNames = ['logo', 'icon'];
    public $logo;
    public $icon;

    protected $rules = [
        'organization.about' => 'nullable|string',
        'organization.video' => 'nullable|string',    
    ];

    public function save()
    {
        $this->validate();
        
        $this->organization->addFromMediaLibraryRequest($this->logo)->toMediaCollection('organization-logos','public');        
        $this->organization->addFromMediaLibraryRequest($this->icon)->toMediaCollection('organization-icons','public');

        $this->organization->save();

        session()->flash('success', 'Organization saved successfully');

        $this->clearMedia();
    }

    public function mount(Organization $organization)
    {
        if ($organization->exists) {
            $this->organization = $organization;
        }
    }
    
    public function render()
    {
        return view('livewire.organization.form.general-form');
    }
}





