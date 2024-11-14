<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function registrer(){

        return view("LoginPages.registrer");

    }

    public function record (Request $request){

        $user= new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return $user;

    }


}
