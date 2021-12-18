<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'qualification' => ['required', 'max:255', 'min:2'],
            'phone' => ['required', 'string'],
            'hospital_name' => ['required', 'min:1'],
            'hospital_address' => ['required', 'min:1'],
            'hospital_phone' => ['required', 'min:1'],
            'monthly_slots' => ['required', 'min:1'],
            'locality_id' => ['required']
        ];
    }
}
