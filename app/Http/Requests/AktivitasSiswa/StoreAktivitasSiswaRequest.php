<?php

namespace App\Http\Requests\AktivitasSiswa;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class StoreAktivitasSiswaRequest extends FormRequest
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
            'tanggal' => [
                'required', 'date',
            ],
            'jurnal' => [
                'required', 'string',
            ],
            'presensi' => [
                'required', 'integer', 'in:1,2,3,4'
            ],
        ];
    }
}
