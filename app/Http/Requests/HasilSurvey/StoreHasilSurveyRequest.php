<?php

namespace App\Http\Requests\HasilSurvey;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class StoreHasilSurveyRequest extends FormRequest
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
            'survey_id' => [
                'required', 'integer',
            ],
            'mitra_id' => [
                'required', 'integer',
            ],
            'skala' => [
                'required', 'integer',
            ],
        ];
    }
}
