<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use Illuminate\Support\Facades\Auth;

class MainPage
{
    // Funcion que muestra la pagina principal y obtiene los datos del usuario registrado.
    public function index()
    {
        // Aqui se obtiene y manda los datos del usuario registrado que inicio sesion a la pagina principal.
        // La desventaja aqui es que, como se esta mandando valores de UN USUARIO REGISTRADO, en caso que no lo sea, seria nulo/null, y eso mandaria error en la pagina.
        // Si quieres arreglar esto, podrias mirar los temas de middleware para manejar condicionales de inicio de sesion.
        $user = Auth::user();
        $publication = Publicacion::orderBy('date', 'desc')->take(3)->get();

        // Aqui no use compact porque puedo asignar el nombre de la variable con los datos que quiero, entonces en este caso, el html esta recibiendo una variable llamada "$userData" con todos los datos del usuario que inicio sesion.
        return view('principal.index', ['userData' => $user, 'publications' => $publication]);
    }
    public function navBar()
    {
        $user = Auth::user();
        return view('principal.navbar', ['userData' => $user]);
    }

}
