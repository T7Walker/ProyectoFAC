<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Log;


class Profile extends Controller
{
    // Esta funcion actualiza valores de la base de datos del usuario.
    public function update(Request $rqs)
    {
        // Nuevamente tomamos al usuario registrado.
        $user = Auth::user();

        // Aqui se esta tomando los valores del usuario, si revisas el HTML de la pagina principal, los inputs de name y email, tienen un valor llamado name="", ese es el input que recibe Request. En estas variables esta pues obviamente lo que se puso en el input.
        $name = $rqs->input('name');
        $email = $rqs->input('email');
        $urlimg = $rqs->input('urlimg');

        // Aqui se le indica a la base de datos que actualice los valores ya existentes del usuario PERO, solo valores independientes, no todos los valotes. Como el nombre y email.
        $user->name = $name;
        $user->email = $email;
        $user->urlimg = $urlimg;

        // Se guardan los cambios
        $user->save();

        // Se redirecciona a la pagina principal con un mensaje al HTML indicando el cambio.
        return redirect()->route('mainPage.index')->with('session_type', 'profileChanged');
    }

    // Este metodo es para eliminar a los usuarios de la base de datos y cerrarles la sesion.
    public function deleted(Request $rqs)
    {
        // Se toma el ID del usuario registrado primero que nada y luego se busca todos sus datos en la base de datos de usuarios.
        $user = Usuario::find(Auth::user()->id);

        // Se procede a eliminalo porque nadie lo quiere.
        $user->delete();

        // Aqui se aplica la misma logica de logout, revisa el codigo del controlador login.
        $rqs->session()->invalidate();
        $rqs->session()->regenerateToken();

        Auth::logout();

        // Se redirecciona al register de la misma forma que pasa al hacer logout, revisa el codigo del controlador login.
        return redirect()->route('register.index')->with('session_type', 'profileDeleted');
    }
}
