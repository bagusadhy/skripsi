<?php

namespace App\Http\Requests\DokumenSiswa;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class StoreDokumenSiswaRequest extends FormRequest
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
            'siswa_id' => [
                'required', 'integer',
            ],
            'surat_pernyataan_siswa' => [
                'nullable', 'mimes:pdf', 'max:2048',
            ],
            'surat_izin_ortu' => [
                'nullable', 'mimes:pdf', 'max:2048',
            ],
        ];
    }
}
