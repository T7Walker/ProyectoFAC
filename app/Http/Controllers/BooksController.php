<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class BooksController
{
    public function push()
    {
        $user = Auth::user();

        return view("Books.pushBooks", ['userData' => $user]);
    }

    public function store(Request $rqs)
    {

        $tiltle = $rqs->input("title");
        $url = $rqs->input("url");

        Libro::create([


            "title" => $rqs->input("title"),
            "url" => $rqs->input("url"),
            'date_creation' => Carbon::now()


        ]);

        $user = Auth::user();

        return redirect()->route('Books.allBooks', ['userData' => $user])->with('success', 'pushBookSucess');
    }

    public function all()
    {

        $books = Libro::all();
        $user = Auth::user();

        return view('Books.allBooks', ['books' => $books, 'userData' => $user]);
    }

    public function show($id)
    {

        $book = Libro::findOrFail($id);
        $user = Auth::user();

        return view('Books.viewBooks', ['book' => $book, 'userData' => $user]);
    }

    public function edit(Request $rqs, $id)
    {

        $book = Libro::find($id);

        $book->tiltle = $rqs->input('tiltle');
        $book->url = $rqs->input('url');

        $book->save();

        $user = Auth::user();

        return redirect()->route('Books.allbooks', ['userData' => $user])->with('success', 'bookEdited');
    }

    public function destroy($id)
    {

        $book = Libro::findOrFail($id);
        $book->delete();

        $user = Auth::user();

        return redirect()->route('Books.allBooks', ['userData' => $user])->with('success', 'bookEliminated');
    }
}
