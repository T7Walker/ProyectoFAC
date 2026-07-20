<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Services\BookService;
use Illuminate\Support\Facades\Auth;

class BooksController
{
    protected BookService $bookService;

    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    public function all()
    {
        $books = $this->bookService->getAll();
        $user = Auth::user();

        return view('Books.allBooks', [
            'libro' => $books,
            'userData' => $user,
        ]);
    }

    public function show($id)
    {
        $book = $this->bookService->getById($id);
        $user = Auth::user();

        return view('Books.viewBooks', [
            'libro' => $book,
            'userData' => $user,
        ]);
    }

    public function push()
    {
        $user = Auth::user();
        return view('Books.pushBooks', ['userData' => $user]);
    }

    public function store(StoreBookRequest $request)
    {
        $this->bookService->create($request->validated());

        return redirect()->route('Books.allBooks')
            ->with('success', 'Libro creado exitosamente.');
    }

    public function edit($id)
    {
        $user = Auth::user();
        $book = $this->bookService->getById($id);

        return view('Books.editBooks', [
            'libro' => $book,
            'userData' => $user,
        ]);
    }

    public function update(StoreBookRequest $request, $id)
    {
        $this->bookService->update($id, $request->validated());

        return redirect()->route('Books.allBooks')
            ->with('success', 'Libro actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $this->bookService->delete($id);

        return redirect()->route('Books.allBooks')
            ->with('success', 'Libro eliminado exitosamente.');
    }
}