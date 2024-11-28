<?php

namespace App\Models;

use App\Models\Zona;
use Illuminate\Database\Eloquent\Model;

class Buseta extends Model
{
    protected $table = "busetas";
    protected $fillable = ['company', 'route_name'];
    public $timestamps = false;

    public function zona()
    {
        return $this->belongsToMany(Zona::class, 'r_zonas_busetas', 'bus_id', 'zone_id');
    }
}
