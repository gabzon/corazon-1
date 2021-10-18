<?php

namespace App\Http\Livewire\Location;

use App\Models\Location;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Support\Str;
use Spatie\MediaLibraryPro\Http\Livewire\Concerns\WithMedia;

class Form extends Component
{
    use WithMedia;

    public $action = 'store';
    public Location $location;

    public $mediaComponentNames = ['contract'];
    public $contract;
    
    protected $rules = [
        'location.name'         => 'required|min:5',
        'location.slug'         => 'required|min:5',
        'location.shortname'    => 'nullable',
        'location.comments'     => 'nullable',
        'location.contact'      => 'nullable',
        'location.website'      => 'nullable|min:12|url',
        'location.email'        => 'nullable|min:5|email',
        'location.phone'        => 'nullable',
        'location.contract'     => 'nullable',
        'location.type'         => 'nullable',
        'location.facebook_id'  => 'nullable|unique:locations,facebook_id,' . $this->location->id,
        'location.user_id'      => 'nullable',
        'location.city_id'      => 'required',
    ];

    public function save()
    {         
        $this->validate(); 
        
        $this->location->save();  
        
        $this->location->addFromMediaLibraryRequest($this->contract)
                       ->toMediaCollection('locations');

        session()->flash('success', 'Location saved successfully!');
        
        return redirect()->route('location.edit', $this->location);
    }

    public function updatedLocationName($value)
    {
        $this->location->slug = Str::slug($value . '-' . \Carbon\Carbon::now()->timestamp,'-'); 
    }

    public function remove()
    {
        if(file_exists(storage_path($this->contract))){
            Storage::delete($this->contract);            
            session()->flash('sucess','Contract deleted successfully!');
        }        
    }

    public function destroy(Location $location)
    {
        // dd($location);
        $location->delete();
        session()->flash('success','Location deleted successfully!');            
        return redirect(route('location.index'));        
    }

    public function mount(Location $location = null)
    {
        if ($location->exists) {
            $this->action       = 'update';
            $this->location     = $location;
        } else {
            $this->location =  new Location;
            $this->location->type = '';
            $this->location->user_id = auth()->user()->id;
        }
    }

    public function render()
    {
        return view('livewire.location.form');
    }
}
























