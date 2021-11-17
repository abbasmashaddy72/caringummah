<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
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
            'symptoms' => ['required', 'string', 'max:50000', 'min:3'],
            'appointment_date' => ['required', 'date'],
            // 'doctor_id' => ['required']
        ];
    }
}
