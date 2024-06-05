<?php

namespace App\Http\Requests\Documantation;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDocumantationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required', 'string', 'max:255',
            ],
            'description' => [
                'nullable', 'string', 'max:255',
            ],
            'photo' => [
                'nullable', 'mimes:jpeg,jpg,svg,png', 'max:10000',
            ],
        ];
    }
}
