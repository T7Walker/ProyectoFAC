<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function Principal(){

        $users=User::all();

        return view('PagesPrincipals.Principal', compact('users'));

    }

    public function store (Resquest $request){

        $user= new User();

        $user->name=$request->Name;
        $user->email=$request->Email;
        $user->password=$request->Password;

        $user->$save();

        return $user;

    }



}
