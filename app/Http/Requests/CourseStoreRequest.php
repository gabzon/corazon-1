<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseStoreRequest extends FormRequest
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
            'excerpt' => ['string'],
            'description' => ['string'],
            'tagline' => ['string'],
            'keywords' => ['string'],
            'start_date' => ['date'],
            'end_date' => ['date'],
            'monday' => [''],
            'start_time_mon' => [''],
            'end_time_mon' => [''],
            'tuesday' => [''],
            'start_time_tue' => [''],
            'end_time_tue' => [''],
            'wednesday' => [''],
            'start_time_wed' => [''],
            'end_time_wed' => [''],
            'thursday' => [''],
            'start_time_thu' => [''],
            'end_time_thu' => [''],
            'friday' => [''],
            'start_time_fri' => [''],
            'end_time_fri' => [''],
            'saturday' => [''],
            'start_time_sat' => [''],
            'end_time_sat' => [''],
            'sunday' => [''],
            'start_time_sun' => [''],
            'end_time_sun' => [''],
            'level' => ['string'],
            'level_number' => ['string'],
            'duration' => [''],
            'teaser_video_1' => ['string'],
            'teaser_video_2' => ['string'],
            'teaser_video_3' => ['string'],
            'full_price' => ['numeric'],
            'reduced_price' => ['numeric'],
            'promo_price' => ['numeric'],
            'promo_expiry_date' => ['date'],
            'thumbnail' => ['string'],
            'focus' => ['string', 'max:40'],
            'type' => ['string', 'max:40'],
            'status' => ['string', 'max:40'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'classroom_id' => ['required', 'integer', 'exists:classrooms,id'],
            'city_id' => ['required', 'integer', 'exists:cities,id'],
            'school_id' => ['required', 'integer', 'exists:schools,id'],
        ];
    }
}
