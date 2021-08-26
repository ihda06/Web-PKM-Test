<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Unique;

class RegistrationRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email', 'unique:Users'],
            'npm' => ['required', 'max:12', 'min:12', 'unique:Users'],
            'program_studi' => ['required', 'max:40'],
            'password' => ['required', 'string', 'min:5'],
            'confirmationpass' => ['required', 'string', 'min:5', 'same:password']
        ];
    }
}
