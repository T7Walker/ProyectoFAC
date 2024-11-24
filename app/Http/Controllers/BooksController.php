<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Books;


use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function pushBook(){

        return view("Books.pushBooks");
    }
    public function storeBook(Request $request){
        $book = new Books();
        $book->title = $request->title;
        $book->UbookURL = $request->URL;
        $book->description = $request->description;

        $book->save();

        return $book;
    }

    public function principalBook(Request $request){

        $book = Books::all();

        return view('PagesPrincipals.principal', compact(('book')));
    }
    public function editBook($id){

        $book = Books::find($id);
        return view('Books.editBooks', compact(('book')));

    }
    public function deleteBook($id){

        $book = Books::find($id);
        $book->delete();
        return redirect('')->route('Books.allBooKS');

    }
    public function allBooks($id){
        
        $books = Books::all();
        return view('Books.allBooks', compact(('book')));

    }
    public function viewBook($id){

        $book = Books::find($id);
        return view('Books.viewBooks', compact(('book')));

    }
    public function updateBook(Request $request, $id){

        $book = Books::find($id);
        $book->title = $request->title;
        $book->bookURL = $request->URL;
        $book->description = $request->description;
        $book->save();
        return redirect('')->route('Books.allBooks');
        
    }


}
