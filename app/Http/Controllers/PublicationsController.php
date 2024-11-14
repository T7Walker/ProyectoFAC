<?php

namespace App\Http\Controllers;

use App\Models\Publications;

use Illuminate\Http\Request;

class PublicationsController extends Controller
{

    public function principal(){

        return view('PagesPrincipals.Principal');

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

}
