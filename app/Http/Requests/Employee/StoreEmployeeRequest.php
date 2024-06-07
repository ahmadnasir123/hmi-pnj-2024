<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class StoreEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        abort_if(Gate::denies('employee_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

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
            'category_id' => [
                'required', 'integer',
            ],
            'name' => [
                'required', 'string', 'max:255'
            ],
            'angkatan' => [
                'required', 'string', 'max:255'
            ],
            'lk1' => [
                'required', 'string', 'max:255'
            ],
            'tahun_1' => [
                'required', 'string', 'max:255'
            ],
            'lk2' => [
                'nullable', 'string', 'max:255'
            ],
            'tahun_2' => [
                'nullable', 'string', 'max:255'
            ],
            'lk3' => [
                'nullable', 'string', 'max:255'
            ],
            'tahun_3' => [
                'nullable', 'string', 'max:255'
            ],
        ];
    }
}
