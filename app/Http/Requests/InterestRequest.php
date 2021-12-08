<?php

namespace App\Http\Requests;

use App\Contracts\Interestable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

class InterestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('interest', $this->interestable());        
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'interestable_type' => [
                "bail",
                'required',
                'string',
                function($attribute, $value, $fail) {
                    if (! class_exists($value, true)) {
                        $fail($value . " is not an existing class");
                    }

                    if (! in_array(Model::class, class_parents($value))) {
                        $fail($value . " is not Illuminate\Database\Eloquent\Model");
                    }

                    if (! in_array(Interestable::class, class_implements($value))) {
                        $fail($value . " is not App\Contracts\Interestable");
                    }
                }
            ],
            'id' => [
                'required',
                function($attribute, $value, $fail){
                    $class = $this->input('interestable_type');

                    if (! $class::where('id', $value)->exists()) {
                        $fail($value . ' does not exists in database');
                    }
                }
            ]
        ];
    }

    public function interestable(): Interestable
    {
        $class = $this->input('interestable_type');

        return $class::findOrFail($this->input('id'));
    }
}


