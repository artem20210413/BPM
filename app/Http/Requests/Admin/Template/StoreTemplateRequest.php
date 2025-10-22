<?php

namespace App\Http\Requests\Admin\Template;

use Illuminate\Foundation\Http\FormRequest;

class StoreTemplateRequest extends FormRequest
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
            'attribute_id' => ['required','integer','exists:attributes,id'],
            'ru.title'     => ['required','string','max:255'],
            'ru.content'   => ['nullable','string'],
            'en.title'     => ['nullable','string','max:255'],
            'en.content'   => ['nullable','string'],
            'ro.title'     => ['nullable','string','max:255'],
            'ro.content'   => ['nullable','string'],
        ];
    }
}
