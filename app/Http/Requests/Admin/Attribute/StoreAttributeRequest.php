<?php

namespace App\Http\Requests\Admin\Attribute;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAttributeRequest extends FormRequest
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
            'unit_id'  => ['nullable','integer','exists:units,id'],
            'priority' => ['required','integer','between:0,100000'],
            'type'     => ['required', Rule::in(['string','list','int','float','bool','datetime'])],

            // переводы (en обязателен — можно снять требование, если title nullable в БД)

            'ru.title'   => ['required','string','max:255'],
            'ru.content' => ['nullable','string'],
            'en.title'   => ['nullable','string','max:255'],
            'en.content' => ['nullable','string'],
            'ro.title'   => ['nullable','string','max:255'],
            'ro.content' => ['nullable','string'],
        ];
    }
}
