<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UmmahRequest extends FormRequest
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
            'qualification' => ['required', 'max:255', 'min:3'],
            'phone' => ['required', 'string'],
            'connected_with' => ['required', 'min:1'],
            'occupation' => ['required', 'min:1'],
            'member_count' => ['required', 'min:1'],
            'family_members' => ['required', 'min:1'],
        ];
    }
}
