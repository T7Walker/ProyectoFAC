<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buses extends Model
{

    public function zone (){

        return $this->HasMany(Zones::class);

    }
}
