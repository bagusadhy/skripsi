<?php

namespace App\Http\Requests\Nilai;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Validation\Rule;

class UpdateNilaiRequest extends FormRequest
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
            'siswa_id' => 'required', 'integer', Rule::unique('nilai')->ignore($this->nilai),
            'nilai' => [
                'required', 'mimes:application/pdf', 'max:10000',
            ],
        ];
    }
}
