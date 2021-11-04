<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {        
        // $city = $this->city->name;
        return [
            'id'            => $this->id,
            'name'          => $this->name,
            'tagline'       => $this->tagline,
            'start_date'    => $this->start_date,
            'end_date'      => $this->end_date, 
            'start_time'    => $this->start_time,
            'end_time'      => $this->end_time,
            'thumbnail'     => $this->thumbnail,
            'type'          => $this->type, 
            'location_id'   => $this->location_id, 
            'city_id'       => $this->city_id,                 
            'thumb'         => $this->thumb, 
            'city'          => $this->city->name ?? null,
            'country_code'  => $this->city->alpha2Code ?? null,
            'location_name' => $this->location->name ?? null,
            'location_shortname' => $this->location->shortname ?? null,
            'neighborhood'  => $this->location->neighborhood ?? null,
            'styles'        => implode(', ',$this->styles->pluck('name')->toArray())                    
        ];;
    }
}