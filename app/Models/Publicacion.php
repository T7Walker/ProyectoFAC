<?php

namespace App\Models;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $table = "publicaciones";
    protected $fillable = ['user_id', 'content', 'url_file', 'date'];
    public $timestamps = false;

    public function usuario()
    {
        $this->belongsTo(Usuario::class, 'user_id');
    }
}
