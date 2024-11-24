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
        $user->URLProfileIMG = $request->URLProfileIMG;

        $user->save();

        return $user;

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
    public function updateProfile(Request $request, $id){

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->URLProfileIMG = $request->URLProfileIMG;
    }


}
