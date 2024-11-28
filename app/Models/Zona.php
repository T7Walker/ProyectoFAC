<?php

namespace App\Models;

use App\Models\Mapa;
use App\Models\Buseta;
use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    protected $table = "zonas";
    protected $fillable = ['user_id', 'content', 'url_file', 'date'];
    public $timestamps = false;

    public function mapa()
    {
        return $this->belongsToMany(Mapa::class, 'r_mapas_zonas', 'zone_id', 'map_id');
    }

    public function buseta()
    {
        return $this->belongsToMany(Buseta::class, 'r_zonas_busetas', 'zone_id', 'bus_id');
    }
}
