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
            'mitra_id' => [
                'required', 'integer',
            ],
            'topik' => [
                'required', 'string', 'max:1000',
            ],
            'permasalahan' => [
                'required', 'string', 'max:1000',
            ],
            'tujuan' => [
                'required', 'string', 'max:1000',
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
