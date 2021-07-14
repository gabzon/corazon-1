<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StyleStoreRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:50'],
            'slug' => ['string', 'max:80'],
            'icon' => ['string', 'max:40'],
            'color' => ['string', 'max:40'],
            'thumbnail' => ['string'],
            'origin' => ['string', 'max:50'],
            'family' => ['string', 'max:100'],
            'music' => ['string'],
            'year' => ['string', 'max:20'],
            'video' => ['string'],
            'description' => ['string'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
        ];
    }
}
