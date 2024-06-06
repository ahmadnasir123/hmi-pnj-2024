<?php

namespace App\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

// this rule only update requests
use Illuminate\Validation\Rule;

class UpdateRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        abort_if(Gate::denies('role_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

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
            'title' => [
                'required', 'string', 'max:255', Rule::unique('role')->ignore($this->role),
            ],
        ];
    }
}
