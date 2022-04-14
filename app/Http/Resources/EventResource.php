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
        return [
            'id'            => $this->id,
            'name'          => $this->name,
            'tagline'       => $this->tagline,
            'start_date'    => $this->start_date->format('Y-m-d'),
            'end_date'      => $this->end_date->format('Y-m-d'), 
            'start_time'    => $this->start_date->format('Y-m-d H:i'),
            'end_time'      => $this->end_date->format('Y-m-d H:i'),
            'thumbnail'     => $this->coverImage,
            'type'          => $this->type, 
            'location_id'   => $this->location_id, 
            'city_id'       => $this->city_id,
            'is_online'     => $this->is_online,
            'is_free'       => $this->is_free,
            'status'        => $this->status,
            'thumb'         => $this->thumb, 
            'contact'       => $this->contact,
            'email'         => $this->email,
            'phone'         => $this->phone,
            'website'       => $this->website,
            'facebook'      => $this->facebook,
            'twitter'       => $this->twitter,
            'instagram'     => $this->instagram,
            'youtube'       => $this->youtube,
            'tiktok'        => $this->tiktok,
            'city'          => $this->city->name ?? null,
            'styles'        => implode(', ',$this->styles->pluck('name')->toArray()),
            'country_code'  => $this->city->alpha2Code ?? null,
            'location_name' => $this->location->name ?? null,
            'neighborhood'  => $this->location->neighborhood ?? null,
            'location_shortname' => $this->location->shortname ?? null,
            'description'   => $this->description,
            'video'         => $this->video,            
        ];
    }
}