<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Map
{
    public function index()
    {

        $user = Auth::user();

        return view('map.index', ['userData' => $user]);
    }
}
