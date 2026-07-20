<?php

namespace App\Services;

use App\Models\Publicacion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PublicationService
{
    /**
     * Obtener todas las publicaciones.
     */
    public function getAll()
    {
        return Publicacion::all();
    }

    /**
     * Obtener una publicación por ID.
     */
    public function getById(int $id): Publicacion
    {
        return Publicacion::findOrFail($id);
    }

    /**
     * Crear una nueva publicación.
     */
    public function create(array $data): Publicacion
    {
        $publication = Publicacion::create([
            'user_id' => Auth::id(),
            'content' => $data['content'],
            'url_file' => $data['url_file'] ?? null,
            'date' => now(),
        ]);

        Log::info('Publicación creada', [
            'publication_id' => $publication->id,
            'user_id' => Auth::id(),
        ]);

        return $publication;
    }

    /**
     * Actualizar una publicación existente.
     */
    public function update(int $id, array $data): Publicacion
    {
        $publication = $this->getById($id);

        $publication->update([
            'content' => $data['content'] ?? $publication->content,
            'url_file' => $data['url_file'] ?? $publication->url_file,
            'date' => $data['date'] ?? $publication->date,
        ]);

        Log::info('Publicación actualizada', [
            'publication_id' => $id,
            'user_id' => Auth::id(),
        ]);

        return $publication;
    }

    /**
     * Eliminar una publicación.
     */
    public function delete(int $id): bool
    {
        $publication = $this->getById($id);
        $deleted = $publication->delete();

        if ($deleted) {
            Log::info('Publicación eliminada', [
                'publication_id' => $id,
                'user_id' => Auth::id(),
            ]);
        }

        return $deleted;
    }

    /**
     * Obtener las últimas publicaciones para la página principal.
     */
    public function getLatest(int $limit = 3)
    {
        return Publicacion::orderBy('date', 'desc')->take($limit)->get();
    }
}