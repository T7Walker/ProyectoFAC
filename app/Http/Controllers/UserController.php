<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    public function record(Request $request)
{
    // Validar los datos de entrada
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed|min:8', // Asegura que la contraseña se confirme
    ]);

    $user = new User();

    $user->name = $request->name;
    $user->email = $request->email;
    // Encriptar la contraseña antes de guardarla
    $user->password = Hash::make($request->password);
    $user->URLProfileIMG = $request->URLProfileIMG;

    $user->save();

    return redirect()->route('login');  // Redirige al usuario al login después de registrarse
}
    public function logout(Request $request)
    {
        Auth::logout();  // Cerrar sesión
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('PagesPrincipals.navBar');  // Redirigir al usuario a la página principal
    }
    public function updateProfile(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'password' => 'nullable|min:8',  // Solo validar la contraseña si se ha cambiado
    ]);

    $user = User::find($id);
    $user->name = $request->name;
    $user->email = $request->email;

    if ($request->password) {
        $user->password = Hash::make($request->password);  // Encriptar la nueva contraseña
    }

    $user->URLProfileIMG = $request->URLProfileIMG;
    $user->save();

    return redirect()->route('profile.edit', $id)->with('status', 'Perfil actualizado con éxito');
}


    

    /*public function record (Request $request){

        $user= new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->URLProfileIMG = $request->URLProfileIMG;

        $user->save();

        return $user;

    }*/

    public function registrer(){

        return view("LoginPages.registrer");

    }
    public function login(Request $request)
{
    // Validar los datos de entrada
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Intentar autenticar al usuario
    if (Auth::attempt($request->only('email', 'password'))) {
        // Regenerar la sesión para protegerla de ataques de fijación de sesión
        $request->session()->regenerate();

        // Redirigir al usuario a la página principal o dashboard
        return redirect()->intended('/home');  // Ajusta la ruta a la que quieras redirigir
    }

    // Si las credenciales no coinciden, regresar con un error
    return back()->withErrors([
        'email' => 'Las credenciales no coinciden con nuestros registros.',
    ]);
}


    public function showProfile($id){

        $user= User::find($id);
        return view("PagesPrincipals.principal",compact("user"));

    }

    public function yourProfile(Request $request){

        $user = User::find( $request->user_id );
        return view("Users.yourProfile",compact("user"));

    }
    public function editprofile($id){

        $user = User::find($id);
        return view("Users.editProfile",compact("user"));

    }
    public function closeProfile($id){

        $user = User::find($id);
        $user->delete();
        
        return redirect('')->route("PagesPrincipal.principal");
    
    }
    /*public function updateProfile(Request $request, $id){

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->URLProfileIMG = $request->URLProfileIMG;
    }*/

}
