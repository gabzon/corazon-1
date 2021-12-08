<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use phpDocumentor\Reflection\Types\This;

class OrganizationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $image =  asset('images/default-logo.jpg');
        
        if ($this->getMedia('organization-icons')->last() != null) {
            $image = $this->getMedia('organization-icons')->last()->getUrl();
        }
        
        return [
            'id'        => $this->id,
            'name'      => $this->name,
            'city'      => $this->city->name,
            'country'   => $this->city->alpha2Code,
            'image'     => $image,
        ];
    }
}
