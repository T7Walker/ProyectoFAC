<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zones extends Model
{
    public function maps(){

        return $this->belongsToMany(Maps::class);

    }

    public function buses(){

        return $this->belongsTo(Buses::class);

    }

}
