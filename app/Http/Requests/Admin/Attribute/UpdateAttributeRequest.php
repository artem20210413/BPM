<?php

namespace App\Http\Requests\Admin\Attribute;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateAttributeRequest extends FormRequest
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
        $id = $this->route('attribute')?->id;

        return [
            'unit_id'  => ['nullable','integer','exists:units,id'],
//            'code'     => ['required','string','max:64', Rule::unique('attributes','code')->ignore($id)],
            'priority' => ['required','integer','between:0,100000'],
            'type'     => ['required', Rule::in(['string','text','int','float','bool','datetime'])],

            'en.title'   => ['nullable','string','max:255'],
            'en.content' => ['nullable','string'],
            'ro.title'   => ['nullable','string','max:255'],
            'ro.content' => ['nullable','string'],
            'ru.title'   => ['required','string','max:255'],
            'ru.content' => ['nullable','string'],
        ];
    }
}
