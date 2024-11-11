<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maps extends Model
{
    public function user (){

        return $this->belongsTo(User::class);

    }

    public function zone(){

        return $this->belongsToMany(Zones::class);

    }

}
