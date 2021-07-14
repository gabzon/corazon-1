<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderUpdateRequest extends FormRequest
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
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'subtotal' => ['numeric'],
            'vat' => ['numeric'],
            'quantity_discount' => ['numeric'],
            'user_status_discount' => ['numeric'],
            'coupon_discount' => ['numeric'],
            'coupon_code' => ['string'],
            'total' => ['numeric'],
            'comments' => ['string'],
            'method' => ['string'],
            'status' => ['in:open,canceled,paid,expired,partial'],
            'author_id' => ['integer', 'exists:authors,id'],
        ];
    }
}
