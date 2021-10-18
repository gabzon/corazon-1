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
	public string|null $fb_place_id;

	public function __construct($place)
	{
		$this->name = $place->getField('name');
		$this->hasLocation = in_array('location', $place->getFieldNames());

		if ($this->hasLocation) {

			$this->fb_place_id = $place['id'] ?? null;

			$this->fbLocation = $place['location'];

			$this->hasCity = in_array('city', $place['location']->getFieldNames());

			if ($this->hasCity) {
				$this->fbCity = $place->getField('location')['city'];
			}

			if (in_array('country', $place['location']->getFieldNames())) {
				$this->country = $place->getField('location')['country'];
			}

			if (in_array('latitude', $place['location']->getFieldNames())) {
				$this->lat = $place->getField('location')['latitude'];
			}

			if (in_array('longitude', $place['location']->getFieldNames())) {
				$this->lng = $place->getField('location')['longitude'];
			}

			if (in_array('street', $place['location']->getFieldNames())) {
				$this->address = $place->getField('location')['street'];
			}

			if (in_array('zip', $place['location']->getFieldNames())) {
				$this->zip = $place->getField('location')['zip'];
			}

			$locationByFacebookID = $this->getLocationByFacebookID($this->fb_place_id);
			$locationByNameAndAddress = $this->getLocationByNameAndAddress($this->name, $place['location']['street']);

			if ($locationByFacebookID != null) {
				$this->location = $locationByFacebookID;
			} elseif ($locationByNameAndAddress != null) {
				$this->location = $locationByNameAndAddress;
			} else {
				$this->location = $this->getLocationID();
			}
		}
	}

	public function hasLocation(): bool
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

	public function getLocationID(): Location
	{
		$location = Location::firstOrCreate([
			'name'        => $this->name,
			'slug'        => Str::slug($this->name . '-' . \Carbon\Carbon::now()->timestamp, '-'),
			'address'     => $this->address,
			'zip'         => $this->zip ?? null,
			'lat'         => $this->lat,
			'lng'         => $this->lng,
			'facebook_id' => $this->fb_place_id,
			'user_id'     => auth()->user()->id,
			'city_id'     => $this->getCityID(),
		]);
		return $location;
	}

	public function getCityID(): int
	{
		$city = City::where('name', 'LIKE', "%{ $this->fbCity }%")->first();		
		if ($city != null) {
			return $city->id;
		} else {	
			$city = City::Create([
				'name'    => $this->fbCity,
				'slug'    => Str::slug($this->fbCity . '-' . $this->country),
				'country' => $this->country,
			]);
			return $city->id;
		}
	}
}

