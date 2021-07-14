<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionUpdateRequest extends FormRequest
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
            'code' => ['string'],
            'provider' => ['string'],
            'method' => ['string'],
            'amount' => ['required', 'string'],
            'amount_received' => ['string'],
            'currency' => ['string'],
            'molley_payment_id' => ['string'],
            'status' => ['required', 'in:paid,partial,processing,overpaid,failed,open,canceled,expired'],
            'received_date' => ['date'],
            'comments' => ['string'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'order_id' => ['required', 'integer', 'exists:orders,id'],
        ];
    }
}
