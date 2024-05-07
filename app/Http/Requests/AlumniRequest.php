<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AlumniRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // dd($this->route('alumnus'));
        return [
            'name' => ['required', 'string', 'min:3', 'max:100'],
            'last_name' => ['required', 'string', 'min:3', 'max:100'],
            'email' => [
                'required',
                Rule::unique('users')->ignore($this->route('alumnus'))
            ],
            'alamat' => ['required', 'string', 'min:10', 'max:225'],
            'telepon' => ['required'],
            'tempat_lahir' => ['required', 'string'],
            'tanggal_lahir' => ['required',],
            'tahun_lulus' => [
                'required', 'digits:4', 'integer', 'min:1900',
                'max:2050'
            ]
        ];
    }
}
