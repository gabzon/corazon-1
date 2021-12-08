<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventStoreRequest extends FormRequest
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
            'description' => ['string'],
            'start_date' => ['date'],
            'end_date' => ['date'],
            'start_time' => [''],
            'end_time' => [''],
            'price' => ['numeric'],
            'reduced_price' => ['numeric'],
            'promo_price' => ['numeric'],
            'promo_expiry_date' => ['date'],
            'currency' => ['string', 'max:20'],
            'video' => ['string'],
            'thumbnail' => ['string'],
            'type' => ['string'],
            'status' => ['string'],
            'organiser' => ['string', 'max:100'],
            'contact' => ['string', 'max:100'],
            'email' => ['email', 'max:100'],
            'phone' => ['string', 'max:100'],
            'website' => ['string', 'max:100'],
            'facebook' => ['string'],
            'twitter' => ['string'],
            'instagram' => ['string'],
            'youtube' => ['string'],
            'tiktok' => ['string'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'space_id' => ['required', 'integer', 'exists:classrooms,id'],
            'city_id' => ['required', 'integer', 'exists:cities,id'],
        ];
    }
}
