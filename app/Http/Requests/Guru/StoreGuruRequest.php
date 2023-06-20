<?php

namespace App\Http\Requests\Guru;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;


class StoreGuruRequest extends FormRequest
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
            'user_id' => [
                'required', 'integer',
            ],
            'jurusan_id' => [
                'required', 'integer',
            ],
            'nip' => [
                'required', 'string', 'unique:guru', 'max:50',
            ],
            'nama' => [
                'required', 'string', 'max:255',
            ],
            'kontak' => [
                'required', 'string', 'max:50',
            ],
            'foto' => [
                'nullable', 'mimes:jpg,svg,png', 'max:10000',
            ],
            'jenis_kelamin' => [
                'required', 'in:1,2',
            ],
        ];
    }
}
