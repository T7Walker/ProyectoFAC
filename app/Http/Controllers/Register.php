<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class Register
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $rqs)
    {
        $username = $rqs->input('username');
        $email = $rqs->input('email');
        $pass = Hash::make($rqs->input('password'));

        Usuario::create([
            'name' => $username,
            'email' => $email,
            'password' => $pass,
            'date_creation' => Carbon::now()
        ]);

        return redirect()->route('login.index')->with('session_type', 'registerSuccess');
    }
}
