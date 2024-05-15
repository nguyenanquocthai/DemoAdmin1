<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'category_name' => 'required|unique:categories' //them 'es' la database
        ];
    }
    public function messages(): array
    {
        return [
            'category_name.required' => 'Require Category Name',
            'category_name.unique' => 'Unit Category Name'

        ];
    }
}
