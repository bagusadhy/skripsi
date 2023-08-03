<?php

namespace App\Http\Requests\PeriodePkl;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class StorePeriodePklRequest extends FormRequest
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
            'pendaftaran' => [
                'required', 'date', 'before:kegiatan',
            ],
            'kegiatan' => [
                'required', 'date', 'after:pendaftaran',
            ],
            'kegiatan_selesai' => [
                'required', 'date', 'after:kegiatan',
            ],
        ];
    }
}
