<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class BooksController
{
    public function push()
    {

        return view("Books.pushBooks");
    }

    public function store(Request $rqs)
    {

        $tiltle = $rqs->input("tiltle");
        $url = $rqs->input("url");

        Libro::create([


            "tiltle" => $rqs->input("tiltle"),
            "url" => $rqs->input("url"),
            'date_creation' => Carbon::now()


        ]);

        return redirect()->route('Books.allBooks')->with('success', 'pushBookSucess');
    }

    public function all()
    {

        $book = Libro::all();
        return view('Books.allBooks', ['book' => $book]);
    }

    public function show($id)
    {

        $book = Libro::findOrFail($id);
        return view('Books.viewBooks', compact(''));
    }
    public function edit(Request $rqs, $id)
    {

        $book = Libro::find($id);

        $book->tiltle = $rqs->input('tiltle');
        $book->url = $rqs->input('url');

        $book->save();

        return redirect()->route('Books.allbooks')->with('success', 'bookEdited');
    }

    public function destroy($id)
    {

        $book = Libro::findOrFail($id);
        $book->delete();

        return redirect()->route('Books.allBooks')->with('success', 'bookEliminated');
    }
}
