<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Login
{
    public function index()
    {
        return view("login.index");
    }

    public function login(Request $rqs)
    {
        $emailInput = $rqs->input('email');
        $passInput = $rqs->input('password');

        $user = Usuario::where('email', $emailInput)->first();

        if (!$user) {
            return redirect()->back()->with('session_type', 'errNoExists');
        };

        if (!Hash::check($passInput, $user->password)) {
            return redirect()->back()->with('session_type', 'errPassword');
        };

        $user->date_creation = now();
        $user->save();

        Auth::login($user, true);

        return redirect()->route('mainPage.index')->with('session_type', 'loginSuccess');
    }

    public function logout(Request $rqs)
    {
        $rqs->session()->invalidate();
        $rqs->session()->regenerateToken();

        Auth::logout();

        return redirect()->route('login.index')->with('session_type', 'logoutSuccess');
    }
}
