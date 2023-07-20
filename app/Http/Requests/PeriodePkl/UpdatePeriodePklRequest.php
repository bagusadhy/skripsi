<?php

namespace App\Http\Requests\PeriodePkl;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Validation\Rule;

class UpdatePeriodePklRequest extends FormRequest
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
            'nama_timeline' => 'required', 'string', Rule::unique('periode_pkl')->ignore($this->periode_pkl), 'max:255',
            'tanggal_dimulai' => [
                'required', 'date',
            ],
            'tanggal_berakhir' => [
                'required', 'date',
            ],
        ];
    }
}
