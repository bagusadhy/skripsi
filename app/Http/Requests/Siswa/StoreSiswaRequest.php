<?php

namespace App\Http\Requests\Siswa;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class StoreSiswaRequest extends FormRequest
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
            'jurusan_id' => [
                'required', 'integer',
            ],
            'kelas_id' => [
                'required', 'integer',
            ],
            'nisn' => [
                'required', 'string', 'unique:siswa', 'max:50'
            ],
            'nama' => [
                'required', 'string', 'max:255'
            ],
            'tempat_lahir' => [
                'required', 'string', 'max:255'
            ],
            'tanggal_lahir' => [
                'required', 'date',
            ],
            'jenis_kelamin' => [
                'required', 'in:1,2',
            ],
            'agama' => [
                'requered', 'string', 'max:20'
            ],
            'alamat' => [
                'required', 'string', 'max:255'
            ],
            'kontak' => [
                'required', 'string', 'max:50'
            ],
            'foto' => [
                'nullable', 'mimes:jpg,svg,png', 'max:10000'
            ],
        ];
    }
}
