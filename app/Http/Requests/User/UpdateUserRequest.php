<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nama' => [
                'required', 'string', 'max:255'
            ],
            'email' => [
                'required', 'string', 'email', Rule::unique('users')->ignore($this->user), 'max:255'

            ],
            'password' => [
                'required', 'string', 'min:8',
            ],
            'role_id' => [
                'required', 'integer',
            ],
        ];
    }
}
