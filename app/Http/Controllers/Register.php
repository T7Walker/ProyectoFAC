<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class Register
{
    // Metodo que te lleva a la vista de registro.
    public function index()
    {
        return view('register.index');
    }

    // Metodo que guarda y registra al usuario al terminar el formulario de registro.
    public function store(Request $rqs)
    {
        // Aqui se esta tomando los valores del usuario, si revisas el HTML de registro, los inputs de username, email y password, tienen un valor llamado name="", ese es el input que recibe Request. En estas variables esta pues obviamente lo que se puso en el input.
        $username = $rqs->input('name');
        $email = $rqs->input('email');
        $pass = Hash::make($rqs->input('password'));
        $urlimg = $rqs->input('urlimg');

        // Aqui se le indica a la base de datos que la tabla usuarios esta a punto de guardar la siguiente informacion tomando en cuenta los inputs del usuario.
        Usuario::create([
            'name' => $username,
            'email' => $email,
            'password' => $pass,
            'urlimg' => $urlimg,
            'date_creation' => Carbon::now() // Esta funcion es para añadir la hora y dia de cuando se crea la cuenta.
        ]);

        // Al terminar, te redirecciona a la pagina de login para iniciar sesion, con un mensaje para el HTML indicando que se creo la cuenta correctamente.
        return redirect()->route('login.index')->with('session_type', 'registerSuccess');
    }
}
