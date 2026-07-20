<?php

namespace App\Services;

use App\Models\Libro;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class BookService
{
    /**
     * Obtener todos los libros.
     */
    public function getAll()
    {
        return Libro::all();
    }

    /**
     * Obtener un libro por ID.
     */
    public function getById(int $id): Libro
    {
        return Libro::findOrFail($id);
    }

    /**
     * Crear un nuevo libro.
     */
    public function create(array $data): Libro
    {
        $book = Libro::create([
            'user_id' => Auth::id(),
            'title' => $data['title'],
            'url' => $data['url'],
        ]);

        Log::info('Libro creado', [
            'book_id' => $book->id,
            'user_id' => Auth::id(),
        ]);

        return $book;
    }

    /**
     * Actualizar un libro existente.
     */
    public function update(int $id, array $data): Libro
    {
        $book = $this->getById($id);

        $book->update([
            'title' => $data['title'] ?? $book->title,
            'url' => $data['url'] ?? $book->url,
        ]);

        Log::info('Libro actualizado', [
            'book_id' => $id,
            'user_id' => Auth::id(),
        ]);

        return $book;
    }

    /**
     * Eliminar un libro.
     */
    public function delete(int $id): bool
    {
        $book = $this->getById($id);
        $deleted = $book->delete();

        if ($deleted) {
            Log::info('Libro eliminado', [
                'book_id' => $id,
                'user_id' => Auth::id(),
            ]);
        }

        return $deleted;
    }
}