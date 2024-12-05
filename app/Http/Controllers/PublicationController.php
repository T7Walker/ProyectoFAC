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
        $date = now();

        Publicacion::create([

            'content' => $content,
            'url_file' => $url_file,
            'date' => $date,

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
        return view('Publications.viewPublication', ['publication' => $publication, 'userData' => $user]);

    }
    public function update(Request $rqs, $id)
    {

        $user = Auth::user();
        $publication = Publicacion::find($id);

        $publication->content = $rqs->input('content');
        $publication->url_file = $rqs->input('url_file');
        $publication->date = $rqs->input('date');

        $publication->save();

        return redirect()->route('Publications.allPublication', ['userData' => $user])->with('success', 'publicationEdited');
    }
    public function edit($id)
    {
        $user = Auth::user();
        $publication = Publicacion::find($id);

        return view('Publications.editPublication', ['publication' => $publication, 'userData' => $user]);

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
