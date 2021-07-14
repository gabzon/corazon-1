<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LocationStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:200'],
            'slug' => ['required', 'string', 'max:300'],
            'shortname' => ['string', 'max:30'],
            'address' => ['string'],
            'address_info' => ['string'],
            'postal_code' => ['string'],
            'city' => ['string'],
            'neighborhood' => ['string'],
            'state' => ['string'],
            'country' => ['string'],
            'comments' => ['string'],
            'contact' => ['string'],
            'website' => ['string'],
            'email' => ['email'],
            'phone' => ['string'],
            'contract' => ['string'],
            'video' => ['string'],
            'entry_code' => ['string'],
            'google_maps_shortlink' => ['string'],
            'google_maps' => ['string'],
            'public_transportation' => ['string'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
        ];
    }
}
