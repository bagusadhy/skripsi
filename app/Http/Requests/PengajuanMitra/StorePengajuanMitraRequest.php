<?php

namespace App\Http\Requests\PengajuanMitra;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class StorePengajuanMitraRequest extends FormRequest
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
            'bidang_usaha_id' => [
                'required', 'integer',
            ],
            'nama' => [
                'required', 'string', 'max:255', 'unique:pengajuan_mitra', 'unique:mitra',
            ],
            'email' => [
                'required', 'string', 'email', 'max:255', 'unique:users',
            ],
            'alamat' => [
                'required', 'string', 'max:255',
            ],
            'kontak' => [
                'required', 'string', 'max:50', 'unique:pengajuan_mitra',
            ],
            'alasan' => [
                'required', 'string', 'max:1000',
            ],
        ];
    }
}
