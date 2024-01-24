<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class PostApiRequest extends FormRequest
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
                'title' => ['required', 'min:1', 'max:25'],
                'body' => ['required','min:1','max:2555'],
                'categories' => ['nullable','array'],
                'image' => ['file'],
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new \HttpResponseException(response()->json($validator->errors(), 422));
    }
}
