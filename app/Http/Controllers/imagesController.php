<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imagesController extends Controller
{
    public function store(Request $request)
    {
        // Validar que se envíe una imagen
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Máximo 2MB
        ]);

        // Guardar la imagen en storage/app/public/images
        $path = $request->file('image')->store('images', 'public');


        // Opcional: Guardar la ruta en la base de datos (ejemplo)
        // Image::create(['path' => $path]);

        return back()->with('success', 'Imagen subida correctamente.')->with('image', $path);
    }
}
