<?php

namespace App\Http\Livewire\City;

use App\Models\City;
use Illuminate\Support\Str;
use Livewire\Component;
use PragmaRX\Countries\Package\Countries;
use Spatie\MediaLibraryPro\Http\Livewire\Concerns\WithMedia;

class Form extends Component
{
    use WithMedia;
    public $city;
    public $countries; 
    
    public $mediaComponentNames = ['image','emblem'];

    public $image;
    public $emblem;
    
    protected $rules = [
        'city.name'         =>  'required',
        'city.slug'         =>  'required',
        'city.state'        =>  'nullable',
        'city.region'       =>  'nullable',
        'city.zip'          =>  'nullable',
        'city.code'         =>  'nullable',
        'city.iataCode'     =>  'nullable',
        'city.population'   =>  'nullable',
        'city.country'      =>  'nullable',
        'city.alpha2Code'   =>  'nullable',
        'city.alpha3Code'   =>  'nullable',
        'city.world_region' =>  'nullable',        
        'city.lng'          =>  'nullable',
        'city.lat'          =>  'nullable',
        'city.emblem'       =>  'nullable',
        'city.image'        =>  'nullable',        
        'city.description'  =>  'nullable',
    ];

    public function updatedCityName($value)
    {        
        $this->city->slug = Str::slug($this->city->name, '-') . '-' . \Carbon\Carbon::now()->timestamp;        
    }

    public function save()
    {
        $this->validate();
        $this->city->save();

        $this->city->addFromMediaLibraryRequest($this->image)->toMediaCollection('city-image');
        $this->city->addFromMediaLibraryRequest($this->emblem)->toMediaCollection('city-emblem');
        
        session()->flash('success','City saved successfully!');

        $this->clearMedia();

        return redirect(route('city.index'));
    }

    public function mount(City $city = null)
    {
        $paises = new Countries();
        
        $this->countries = $paises->all()->pluck('name.common')->toArray();
                
        if ($city->exists) {
            $this->city = $city;        
        } else {
            $this->city = new City;      
            $this->city->country = '';      
        }
    }

    public function render()
    {
        return view('livewire.city.form');
    }
}

