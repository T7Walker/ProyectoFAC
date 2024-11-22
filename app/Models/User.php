<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function publications(){
        
        return $this->hasMany(Publications::class);

    }
    public function books (){

        return $this->hasMany(Books::class);

    }
    public function maps (){

        return $this->hasMany(Maps::class);

    }
}
