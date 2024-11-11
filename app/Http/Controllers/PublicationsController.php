<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class PublicationsController extends Controller
{

    public function principal(){

        return view('PagesPrincipals.Principal');

    }

}
