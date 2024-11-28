<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainPage
{
    public function index()
    {
        $user = Auth::user();

        return view('principal.index', ['userData' => $user]);
    }
}
