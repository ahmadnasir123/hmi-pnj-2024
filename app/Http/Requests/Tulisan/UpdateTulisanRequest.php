<?php

namespace App\Http\Requests\Tulisan;

use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTulisanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        abort_if(Gate::denies('alumni_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'judul' => [
                'required', 'string', 'max:255'
            ],
            'deskripsi' => [
                'required', 'string'
            ],
            'photo' => [
                'nullable', 'mimes:jpeg,jpg,svg,png', 'max:10000',
            ],
        ];
    }
}
