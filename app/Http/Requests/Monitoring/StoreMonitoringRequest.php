<?php

namespace App\Http\Requests\Monitoring;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class StoreMonitoringRequest extends FormRequest
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
            'guru_id' => [
                'required', 'integer',
            ],
            'mitra_id' => [
                'required', 'integer',
            ],
            'tujuan' => [
                'required', 'string', 'max:255',
            ],
            'peserta_pkl' => [
                'required', 'integer',
            ],
            'deskripsi' => [
                'required', 'string', 'max:1000',
            ],
            'tanggal_pelaksanaan' => [
                'required', 'date',
            ],
            'foto' => [
                'required', 'mimes:jpg,svg,png', 'max:10000',
            ],
        ];
    }
}
