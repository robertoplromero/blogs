<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Se establece true para validar en otro lado
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:posts,slug',
            'content' => 'required|string',
            'category' => 'required|string|max:255',
        ];
    }

    // public function messages(): array
    // {
    //     return [
    //         'title.required' => 'El título es obligatorio.',
    //         'title.string' => 'El título debe ser una cadena de texto.',
    //         'title.max' => 'El título no puede tener más de 255 caracteres.',
    //         'slug.required' => 'El slug es obligatorio.',
    //         'slug.string' => 'El slug debe ser una cadena de texto.',
    //         'slug.max' => 'El slug no puede tener más de 255 caracteres.',
    //         'slug.unique' => 'El slug ya está en uso. Por favor, elige otro.',
    //         'content.required' => 'El contenido es obligatorio.',
    //         'content.string' => 'El contenido debe ser una cadena de texto.',
    //         'category.required' => 'La categoría es obligatoria.',
    //         'category.string' => 'La categoría debe ser una cadena de texto.',
    //         'category.max' => 'La categoría no puede tener más de 255 caracteres.',
    //     ];
    // }

    public function attributes(): array
    {
        return [
            'title' => 'título',
            'slug' => 'slug',
            'content' => 'contenido',
            'category' => 'categoría',
        ];
    }
}
