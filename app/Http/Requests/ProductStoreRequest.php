<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'slug' => ['string'],
            'content' => ['string'],
            'video' => ['string'],
            'thumbnail' => ['string'],
            'qty' => ['integer'],
            'price' => ['required', 'numeric'],
            'currency' => ['string', 'max:20'],
            'dealine' => [''],
        ];
    }
}
