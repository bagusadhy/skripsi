<?php

namespace App\Http\Requests\Mitra;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class StoreMitraRequest extends FormRequest
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
            'bidang_usaha_id' => [
                'required', 'integer',
            ],
            'nama' => [
                'required', 'string', 'max:255',
            ],
            'alamat' => [
                'required', 'string', 'max:255',
            ],
            'kontak' => [
                'required', 'string', 'max:50',
            ],
            'nama_pimpinan' => [
                'required', 'string', 'max:255',
            ],
            'nama_pembimbing' => [
                'required', 'string', 'max:255',
            ],
            'foto' => [
                'nullable', 'mimes:jpg,svg,png', 'max:10000',
            ],
        ];
    }
}
