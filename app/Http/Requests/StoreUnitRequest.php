<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUnitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'slug' => ['required', 'string', 'max:191', 'unique:units,slug'],
            'priority' => ['nullable', 'integer', 'between:0,999999'],

            'translations' => ['required', 'array'],
            'translations.ru.title' => ['required', 'string', 'max:255'],
            'translations.ru.content' => ['nullable', 'string'],
            'translations.ro.title' => ['required', 'string', 'max:255'],
            'translations.ro.content' => ['nullable', 'string'],
        ];
    }
}
