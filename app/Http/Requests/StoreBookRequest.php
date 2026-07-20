<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado para esta solicitud.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Reglas de validación para crear/actualizar libros.
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'url' => 'required|url|max:2048',
        ];
    }

    /**
     * Mensajes personalizados de error.
     */
    public function messages(): array
    {
        return [
            'title.required' => 'El título del libro es obligatorio.',
            'title.max' => 'El título no puede superar los 255 caracteres.',
            'url.required' => 'La URL del libro es obligatoria.',
            'url.url' => 'Debes proporcionar una URL válida.',
        ];
    }
}