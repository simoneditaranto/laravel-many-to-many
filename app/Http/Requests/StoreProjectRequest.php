<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'name' => 'required|max:50',
            'description' => 'nullable|max:5000',
            'thumb' => 'required|max:255',
            'link_repo' => 'required|max:255',
            'type_id' => 'nullable|exists:types,id',
            'technologies' => 'nullable|exists:technologies,id',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Il campo :attribute è obbligatorio',
            'max' => 'Il campo :attribute può contentere al massimo :max caratteri',
        ];
    }

    public function attributes(): array 
    {
        return [
            'name' => 'Nome',
            'description' => 'Descriziobe',
            'thumb' => 'Immagine',
            'link_repo' => 'Link repo',
        ];
    }
}
