<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SchoolUpdateRequest extends FormRequest
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
            'video' => ['string'],
            'logo' => ['string'],
            'about' => ['string'],
            'contact' => ['string', 'max:100'],
            'email' => ['email', 'max:100'],
            'phone' => ['string', 'max:100'],
            'website' => ['string', 'max:100'],
            'company_ref' => ['string'],
            'facebook' => ['string'],
            'twitter' => ['string'],
            'instagram' => ['string'],
            'youtube' => ['string'],
            'tiktok' => ['string'],
            'status' => ['string'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
        ];
    }
}
