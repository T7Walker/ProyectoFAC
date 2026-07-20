<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePublicationRequest;
use App\Services\PublicationService;
use Illuminate\Support\Facades\Auth;

class PublicationController
{
    protected PublicationService $publicationService;

    public function __construct(PublicationService $publicationService)
    {
        $this->publicationService = $publicationService;
    }

    public function create()
    {
        $user = Auth::user();
        return view("Publications.createPost", ['userData' => $user]);
    }

    public function store(StorePublicationRequest $request)
    {
        $this->publicationService->create($request->validated());

        return redirect()->route('Publications.allPublication')
            ->with('success', 'Publicación creada exitosamente.');
    }

    public function all()
    {
        $publications = $this->publicationService->getAll();
        $user = Auth::user();

        return view('Publications.allPublication', [
            'publication' => $publications,
            'userData' => $user,
        ]);
    }

    public function show($id)
    {
        $publication = $this->publicationService->getById($id);
        $user = Auth::user();

        return view('Publications.viewPublication', [
            'publication' => $publication,
            'userData' => $user,
        ]);
    }

    public function edit($id)
    {
        $user = Auth::user();
        $publication = $this->publicationService->getById($id);

        return view('Publications.editPublication', [
            'publication' => $publication,
            'userData' => $user,
        ]);
    }

    public function update(StorePublicationRequest $request, $id)
    {
        $this->publicationService->update($id, $request->validated());

        return redirect()->route('Publications.allPublication')
            ->with('success', 'Publicación actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $this->publicationService->delete($id);

        return redirect()->route('Publications.allPublication')
            ->with('success', 'Publicación eliminada exitosamente.');
    }
}