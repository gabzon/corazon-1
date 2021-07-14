<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassroomUpdateRequest extends FormRequest
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
            'slug' => ['required', 'string', 'max:80'],
            'm2' => ['numeric'],
            'capacity' => ['integer'],
            'limit_couples' => ['integer'],
            'price_hour' => ['numeric'],
            'price_month' => ['numeric'],
            'dance_shoes' => [''],
            'comments' => ['string'],
            'color' => ['string'],
            'location_id' => ['required', 'integer', 'exists:locations,id'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
        ];
    }
}
