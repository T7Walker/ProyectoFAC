<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class BooksController
{
    public function index()
    {

        return view("Books.pushBooks");
    }

    public function store(Request $rqs)
    {

        $tiltle = $rqs->input("tiltle");
        $url = $rqs->input("url");

        Usuario::create([


            "tiltle" => $rqs->input("tiltle"),
            "url" => $rqs->input("url"),
            'date_creation' => Carbon::now()


        ]);

        return redirect()->route('Books.allBooks')->with('success', 'pushBookSucess');
    }

    public function show($id)
    {

        //aqui va el show

    }
    public function edit($id)
    {

        //aqui va el edit

    }

    public function update($id)
    {

        //aqui va la update

    }
    public function destroy($id)
    {

        //aqui va el destroy

    }
}
