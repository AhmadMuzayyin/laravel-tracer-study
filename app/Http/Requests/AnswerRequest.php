<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnswerRequest extends FormRequest
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
        return [
            'question_id' => ['required', 'integer'],
            'jawaban_pertama' => ['required', 'string'],
            'jawaban_kedua' => ['required', 'string'],
            'jawaban_ketiga' => ['required', 'string'],
            'jawaban_keempat' => ['required', 'string'],
        ];
    }
}
