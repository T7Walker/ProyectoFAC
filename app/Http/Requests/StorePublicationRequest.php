<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePublicationRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado para esta solicitud.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Reglas de validación para crear/actualizar publicaciones.
     */
    public function rules(): array
    {
        return [
            'content' => 'required|string|max:1000',
            'url_file' => 'nullable|url|max:2048',
            'date' => 'nullable|date',
        ];
    }

    /**
     * Mensajes personalizados de error.
     */
    public function messages(): array
    {
        return [
            'content.required' => 'El contenido de la publicación es obligatorio.',
            'content.max' => 'El contenido no puede superar los 1000 caracteres.',
            'url_file.url' => 'La URL del archivo debe ser una URL válida.',
        ];
    }
}