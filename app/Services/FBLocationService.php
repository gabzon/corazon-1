<?php

namespace App\Services;

use App\Models\City;
use App\Models\Location;
use App\Models\Post;
use Illuminate\Support\Str;

class FBLocationService 
{
    public $name;    
    public bool $hasLocation;
    public Location $location;
    public City $city;
    public bool $hasCity;
    
    public string $fbCity;
    public string|null $lat;
    public string|null $lng;
    public string|null $address;
    public string|null $zip;
    public string|null $country;
    public $fbLocation;
    public string|null $fb_id;
    
    public function __construct($place)
    {                            
        $this->name = $place->getField('name');        
        $this->hasLocation = in_array('location',$place->getFieldNames());

        if ($this->hasLocation) {

          $this->fbCity = $place->getField('location')['city'] ?? null;        
        
          $this->country = $place['location']['country'] ?? '';
          $this->lat = $place['location']['latitude'] ?? null;
          $this->lng = $place['location']['longitude'] ?? null;
          $this->address = $place['location']['street'] ?? null;
          $this->zip = $place['location']['zip'] ?? null;
          
          $this->fb_id = $place['id'] ?? null;
          
          $this->fbLocation = $place['location'] ?? null;
                              
          $locationByFacebookID = $this->getLocationByFacebookID($this->fb_id);
          $locationByNameAndAddress = $this->getLocationByNameAndAddress($this->name, $place['location']['street']);

          if ($locationByFacebookID != null) {
            $this->location = $locationByFacebookID;
          } elseif ($locationByNameAndAddress != null){
            $this->location = $locationByNameAndAddress;                                    
          } else {            
            $this->location = $this->getLocationID();
          }      
        }
    }

    public function hasCity(): bool
    {
      return $this->cityName != null;
    }

    public function hasLocation() : bool
    {
      return $this->location != null ? true : false;
    }

    public function getLocationByFacebookID($id)
    {
      return Location::where('facebook_id', $id)->first();
    }

    public function getLocationByNameAndAddress($name, $address)
    {
      return Location::where('name', 'LIKE', "%{ $name }%")
                      ->where('address', 'LIKE', "%{ $address }%")
                      ->first();
    }

    public function getLocationID():Location
    {                 
      $location = Location::firstOrCreate([
        'name'        => $this->name,
        'slug'        => Str::slug($this->name . '-' . \Carbon\Carbon::now()->timestamp,'-'),
        'address'     => $this->address,
        'zip'         => $this->zip,
        'lat'         => $this->lat,
        'lng'         => $this->lng,
        'facebook_id' => $this->fb_id,
        'user_id'     => auth()->user()->id,
        'city_id'     => $this->getCityID(),
      ]);  
      return $location;    
    }

    public function getCityID():int
    {        
        $city = City::where('name', $this->fbCity)->firstOrCreate([
          'name'    => $this->fbCity,
          'slug'    => Str::slug($this->fbCity . '-' . $this->country),
          'country' => $this->country,
        ]);                
        return $city->id;
    }
}
