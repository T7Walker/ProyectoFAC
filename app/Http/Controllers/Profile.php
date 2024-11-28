<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Profile
{
    public function update(Request $rqs)
    {
        $name = $rqs->input('name');
        $email = $rqs->input('email');

        Usuario::updateOrCreate([
            'name' => $name,
            'email' => $email
        ]);

        return redirect()->route('mainPage.index')->with('session_type', 'profileChanged');
    }

    public function deleted(Request $rqs)
    {
        $user = Usuario::find(Auth::user()->id);

        $user->delete();

        $rqs->session()->invalidate();
        $rqs->session()->regenerateToken();

        Auth::logout();

        return redirect()->route('register.index')->with('session_type', 'profileDeleted');
    }
}
