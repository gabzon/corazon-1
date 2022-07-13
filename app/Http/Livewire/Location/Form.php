<?php

namespace App\Http\Livewire\Location;

use App\Models\City;
use App\Models\Location;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Support\Str;


class Form extends Component
{
    public $action = 'store';
    public Location $location;
    
    protected function rules() {
        return [
            'location.name'         => 'required|min:5',
            'location.slug'         => 'required|min:5',
            'location.shortname'    => 'nullable',            
            'location.type'         => 'nullable',
            'location.google_id'    => 'nullable|unique:locations,google_id,' . $this->location->id,
            'location.facebook_id'  => 'nullable|unique:locations,facebook_id,' . $this->location->id,
            'location.user_id'      => 'nullable',
            'location.city_id'      => 'required',
        ];
    } 

    public function save()
    {         
        $this->validate(); 
        
        $this->location->save();  

        session()->flash('success', 'Location saved successfully!');
        
        return redirect()->route('location.edit', $this->location);
    }

    public function updatedLocationName()
    {
        $cityName = City::findorFail($this->location->city_id);
        $this->location->slug = Str::slug($this->location->city->name,'-') . '-' . Str::slug($this->location->name,'-');
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
























