<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'name' => ['required', 'min:3'],
            'description' => ['min:20']

        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [

            'name.required' => 'The title can not be empty! Please insert a valid title.',
            'name.min:3' => 'The title can not be less than 3 digits! Please insert a valid title.',
            'description.min:20' => 'The description can not be less than 20 digits! Please insert a valid description.',

        ];
    }
}