<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillUpdateRequest extends FormRequest
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
            'icon' => ['string', 'max:30'],
            'difficulty' => ['string', 'max:30'],
            'description' => ['string'],
            'thumbnail' => ['string'],
            'video' => ['string'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
        ];
    }
}
