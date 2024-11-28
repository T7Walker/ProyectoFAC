<?php

namespace App\Models;

use App\Models\Usuario;
use App\Models\Zona;
use Illuminate\Database\Eloquent\Model;

class Mapa extends Model
{
    protected $table = "mapas";
    protected $fillable = ['user_id', 'content', 'url_file', 'date'];
    public $timestamps = false;

    public function usuario()
    {
        $this->belongsTo(Usuario::class, 'user_id');
    }

    public function zona()
    {
        return $this->belongsToMany(Zona::class, 'r_mapas_zonas', 'map_id', 'zone_id');
    }
}
