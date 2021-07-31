<?php

namespace App\Services;

use App\Models\City;
use App\Models\Location;
use App\Models\Post;
use Illuminate\Support\Str;

class FBLocationService 
{
    public $name;
    public $cityName;
    public $lat;
    public $lng;
    public $address;
    public $zip;
    public $country;
    
    public function __construct($place)
    {              
        $this->name = $place['name'];
        $this->cityName = $place['location']['city'] ?? null;
        $this->country = $place['location']['country'] ?? null;
        $this->lat = $place['location']['latitude'] ?? null;
        $this->long = $place['location']['longitude'] ?? null;
        $this->address = $place['location']['street'] ?? null;
        $this->zip = $place['location']['zip'] ?? null;
    }

    public function hasCity(): bool
    {
      return $this->cityName != null;
    }

    public function hasLocation() : bool
    {
      return $this->getField('location') != null;
    }

    public function getFBLocationID():int
    {                 
      $location = Location::firstOrCreate([
        'name'    => $this->name,
        'slug'    => Str::slug($this->name . '-' . \Carbon\Carbon::now()->timestamp,'-'),
        'address' => $this->address,
        'zip'     => $this->zip,
        'lat'     => $this->lat,
        'lng'     => $this->lng,
        'user_id' => auth()->user()->id,
        'city_id' => $this->getCityID($this->cityName),
      ]);  
      return $location->id;    
    }

    public function getCityID():int
    {        
        $city = City::where('name', $this->cityName)->firstOrCreate([
          'name'    => $this->cityName,
          'slug'    => Str::slug($this->name . '-' . $this->country),
          'country' => $this->country,
        ]);                
        return $city->id;
    }
}
