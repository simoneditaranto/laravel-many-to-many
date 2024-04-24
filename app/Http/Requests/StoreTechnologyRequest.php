<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTechnologyRequest extends FormRequest
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
            'name' => 'required|max:10',
            'color' => 'nullable|max:7',
            'icon' => 'nullable|max:100',
        ];
    }

    public function messages() : array
    {
        return [
            'required' => 'Il campo :attribute è obbligatorio',
            'max' => 'Il campo :attribute può contenere al massimo :max caratteri'
        ];
    }

    public function attributes() :array
    {
        return [
            'name' => 'Nome',
            'color' => 'Colore',
            'icon' => 'Icona',
        ];
    }
}
