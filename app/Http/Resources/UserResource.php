<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {    
        $avatar = '';             
        
        if ($this->avatar) {
            $avatar = $this->avatar;
        } else{
            $avatar = $this->profile_photo_url;
        }

        return [
            'id'    => $this->id,
            'name'  => $this->name,
            'email' => $this->email,
            'avatar' => $avatar,            
        ];
    }
}
