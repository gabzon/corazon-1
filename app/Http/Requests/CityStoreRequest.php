<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CityStoreRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:100'],
            'slug' => ['required', 'string', 'max:120'],
            'content' => ['string'],
            'state' => ['string', 'max:100'],
            'region' => ['string', 'max:100'],
            'subregion' => ['string', 'max:100'],
            'code' => ['string', 'max:20'],
            'long' => ['numeric', 'between:-99.99999999,99.99999999'],
            'lat' => ['numeric', 'between:-99.99999999,99.99999999'],
            'postal_code' => ['string', 'max:100'],
            'country' => ['string', 'max:100'],
            'alpha2Code' => ['string', 'max:20'],
            'alpha3Code' => ['string', 'max:20'],
            'iataCode' => ['string', 'max:20'],
        ];
    }
}
