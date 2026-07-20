<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use App\Services\PublicationService;
use Illuminate\Support\Facades\Auth;

class MainPage
{
    protected PublicationService $publicationService;

    public function __construct(PublicationService $publicationService)
    {
        $this->publicationService = $publicationService;
    }

    /**
     * Muestra la página principal.
     * Funciona tanto para usuarios autenticados como para invitados.
     */
    public function index()
    {
        $user = Auth::user();
        $publications = $this->publicationService->getLatest(3);

        return view('principal.index', [
            'userData' => $user,
            'publications' => $publications,
        ]);
    }

    public function navBar()
    {
        $user = Auth::user();
        return view('principal.navbar', ['userData' => $user]);
    }
}