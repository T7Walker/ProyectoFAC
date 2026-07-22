<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use App\Services\BookService;
use App\Services\PublicationService;
use Illuminate\Support\Facades\Auth;

class MainPage
{
    protected PublicationService $publicationService;
    protected BookService $bookService;

    public function __construct(PublicationService $publicationService, BookService $bookService)
    {
        $this->publicationService = $publicationService;
        $this->bookService = $bookService;
    }

    /**
     * Muestra la página principal.
     * Funciona tanto para usuarios autenticados como para invitados.
     */
    public function index()
    {
        $user = Auth::user();
        $publications = $this->publicationService->getLatest(3);
        $books = $this->bookService->getAll();

        return view('principal.index', [
            'userData' => $user,
            'publications' => $publications,
            'books' => $books,
        ]);
    }

    public function navBar()
    {
        $user = Auth::user();
        return view('principal.navbar', ['userData' => $user]);
    }
}
