<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Mostrar formulario de registro
    public function showRegisterForm()
    {
        return view('LoginPages.registrer');  // Vista donde se muestra el formulario de registro
    }

    // Procesar registro
    public function register(Request $request)
    {
        // Validar los datos de la solicitud
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',  // Verificar que el email sea único
            'password' => 'required|string|min:8|confirmed',  // Confirmación de la contraseña
        ]);

        // Crear el nuevo usuario
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),  // Encriptar la contraseña
        ]);

        // Redirigir al formulario de login con un mensaje de éxito
        return redirect()->route('login.form')->with('success', 'Cuenta creada con éxito.');
    }

    // Mostrar formulario de login
    public function showLoginForm()
    {
        return view('auth.login');  // Vista donde se muestra el formulario de login
    }

    // Procesar login
    public function login(Request $request)
    {
        // Validar los datos de login
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Intentar iniciar sesión con las credenciales
        if (Auth::attempt($credentials)) {
            // Regenerar la sesión para prevenir fijación de sesión
            $request->session()->regenerate();
            return redirect()->intended('/profile');  // Redirigir al perfil del usuario
        }

        // Si las credenciales son incorrectas, regresar con error
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden.',
        ]);
    }

    // Logout (Cerrar sesión)
    public function logout(Request $request)
    {
        // Cerrar sesión y eliminar los datos de la sesión
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirigir al home
        return redirect('/');
    }

    // Mostrar perfil del usuario
    public function showProfile()
    {
        return view('auth.profile', ['user' => Auth::user()]);  // Vista con los datos del usuario autenticado
    }

}