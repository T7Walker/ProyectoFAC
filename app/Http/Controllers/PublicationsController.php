<?php

namespace App\Http\Controllers;

use App\Models\Publications;

use Illuminate\Http\Request;

class PublicationsController extends Controller
{
    public function principal(){

        return view("PagesPrincipals.principal");

    }
    public function createPublication (){

        return view('Publications.createPost');
    }

    public function infoPublication (Request $request){

        $publication= new Publications();

        $publication->description =$request->description;
        $publication->imageURL =$request->UrlOfTheImage;

        $publication->save();

        return $publication;
    }

    public function principalPublication(){

        $publication = Publications::all();

        return view('PagesPrincipals.principal', compact(('publication')));

    }

    public function editPublication($id){

        $publication = Publications::find($id);
        return view('Publications.editPublication', compact(('publication')));

    }

    public function deletePublication($id){

        $publication =  Publications::find($id);

        $publication->delete();

        return redirect('')->route('Publications.allPublication');

    }
    public function allPublication($id){

        $publication=Publications::find($id);
        return view('Publications.allPublication', compact('publication'));
    }
    public function viewPublication($id){
        
        $publication=Publications::find($id);
        return view('Publications.viewPublication', compact('publication'));
    }
    public function updatePublication(Request $request, $id){

        $publication= Publications::find($id);
        $publication->description =$request->description;
        $publication->imageURL =$request->UrlOfTheImage;
        $publication->save;
        return redirect()->route('Publications.allPublication');
        
    }


}
