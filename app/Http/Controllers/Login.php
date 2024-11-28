<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Login
{
	// Este metodo lleva a la ruta principal del login.
    public function index()
    {
        return view("login.index");
    }

	// Este metodo comprueba el inicio de sesion para verificar si es correcto tanto si esta registrado, como si esta bien los credenciales como la contraseña.
    public function login(Request $rqs)
    {
		// Aqui se esta tomando los valores del usuario, si revisas el HTML de login, los inputs de email y password, tienen un valor llamado name="", ese es el input que recibe Request. En estas variables esta pues obviamente lo que se puso en el input.
        $emailInput = $rqs->input('email');
        $passInput = $rqs->input('password');
		
		// Aqui se hace una consulta a la base de datos, para analizar los valores que ingreso el usuario y compararlo con lo de la base de datos, en caso de que exista, mandara un valor o true. En caso contrario, seria nulo/null o false.
        $user = Usuario::where('email', $emailInput)->first();

		// Primera condicion. En caso de que la consulta a la base de datos sea nulo o false, entonces retorna a la pagina de login nuevamente pero con un mensaje que se puede usar en el HTML para mostrar animaciones textos y demas.
        if (!$user) {
            return redirect()->back()->with('session_type', 'errNoExists'); // El mensaje es errNoExists, se puede usar en el HTML usando ifs o switch. (Puedo explicar esto si quieres)
        };
		
		// Segunda condicion. En caso de que la contraseña encriptada no sea igual a la de la base de datos, retorna denuevo a la pagina de login, junto con un mensaje de error para el HTML.
        if (!Hash::check($passInput, $user->password)) {
            return redirect()->back()->with('session_type', 'errPassword');
        };
		
		// Como en la base de datos hay un artributo donde se guarda la fecha y hora de creacion de la cuenta, este lo guarda usando el metodo now, que es exactamente lo que piensas. Guarda hora y dia de hoy.
        $user->date_creation = now();
		
		// Si todo sale bien, se guardara el valor de arriba en la base de datos.
        $user->save();
		
		// Si todo sale bien, se indica a la aplicacion que se inicio sesion usando el metodo Auth. El valor true que esta ahi, es un remmeber token, principalmente esto es mas cosas internas y cookies, conviene tenerlo guardado igualmente.
		// Al indicar a la aplicacion que se inicio correctamente, ahora podemos usar el metodo Auth en otras cosas para verificar o obtener valores del usuario que inicio sesion.
		// En el caso de un html, se usa auth()->user(); y en caso de un php, se usa Auth::user();
        Auth::login($user, true);
		
		// Al terminar todo esto, se redirecciona a la pagina principal, junto con un mensaje para el HTML, indicando el inicio de sesion.
        return redirect()->route('mainPage.index')->with('session_type', 'loginSuccess');
    }

    public function logout(Request $rqs)
    {
		// Cuando se cierra sesion, hay que invalidar la sesion y regenerar el token. Lo primero por obvias razones y lo segundo por seguridad, para que no te roben cookies. (Buenas practicas basicamente)
        $rqs->session()->invalidate();
        $rqs->session()->regenerateToken();
		
		// Aqui se le indica a la aplicacion que estas cerrando sesion y ya no podras usar los metodos Auth/auth().
        Auth::logout();
		
		// Al terminar, redirecciona nuevamente a la pagina de login para volver a iniciar sesion, con un mensaje para el HTML indicando que se cerro sesion.
        return redirect()->route('login.index')->with('session_type', 'logoutSuccess');
    }
}
