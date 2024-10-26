<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class PublicationsController extends Controller
{

    public function principal(){

        $publications=Publication::all();

        return view('PagesPrincipal.principal', compact('providers'));

    }

    public function infoPublication (Request $request){

        // Validar el request con URLOfTheImage como opcional
    $request->validate([
        'Content' => 'required|string',          // Campo obligatorio
        'URLOfTheImage' => 'nullable|url'        // Campo opcional y debe ser una URL si se proporciona
    ]);

    // Crear una nueva instancia de Publication
    $publication = new Publication();
    $publication->Content = $request->Content;

    // Solo asignar URLOfTheImage si está presente en el request
    if ($request->has('URLOfTheImage')) {
        $publication->URLOfTheImage = $request->URLOfTheImage;
    }

    // Guardar la publicación en la base de datos
    $publication->save();

    return response()->json(['success' => 'Publication created successfully', 'publication' => $publication]);

    }

}
