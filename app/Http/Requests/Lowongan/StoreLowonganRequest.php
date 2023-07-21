<?php

namespace App\Http\Requests\Lowongan;

use Illuminate\Foundation\Http\FormRequest;

class StoreLowonganRequest extends FormRequest
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
                'required', 'string', 'max:255', 'unique:lowongan'
            ],
            'jurusan_id' => [
                'required', 'integer',
            ],
        ];
    }
}
