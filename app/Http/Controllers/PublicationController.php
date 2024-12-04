<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Publicacion;
use Illuminate\Support\Facades\Auth;

class PublicationController
{
    public function create()
    {
        $user = Auth::user();

        return view("Publications.createPost", ['userData' => $user]);
    }

    public function store(Request $rqs)
    {

        $content = $rqs->input('content');
        $url_file = $rqs->input('url_file');
        $date = Carbon::parse($content);

        Publicacion::create([

            'content' => $rqs->input('content'),
            'url_file' => $rqs->input('url_file'),
            'date' => $rqs->input('date'),

        ]);

        return redirect()->route('Publications.allPublication')->with('success', 'pushBookSucess');
    }
    public function all()
    {

        $publication = Publicacion::all();
        $user = Auth::user();

        return view('Publications.allPublication', ['publication' => $publication, 'userData' => $user]);
    }

    public function show($id)
    {

        $publication = Publicacion::findOrFail($id);
        $user = Auth::user();
        return view('Publications.viewPublication', ['publication', 'userData' => $user]);

    }
    public function edit(Request $rqs, $id)
    {

        $publication = Publicacion::find($id);

        $publication->content = $rqs->input('content');
        $publication->url_file = $rqs->input('url_file');
        $publication->date = $rqs->input('date');

        $publication->save();

        return redirect()->route('Publications.allPublication')->with('success', 'publicationEdited');
    }

    public function destroy($id)
    {

        $publication = Publicacion::findOrFail($id);
        $publication->delete();

        return redirect()->route('Publications.allPublication')->with('success', 'publicationEliminated');
    }
    public function indexNavBar()
    {

        $user = Auth::user();
        return view('Publications.allPublication', ['userData' => $user]);
    }

}
