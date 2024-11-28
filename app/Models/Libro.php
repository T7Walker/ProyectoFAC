<?php

namespace App\Models;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = "libros";
    protected $fillable = ['user_id', 'title', 'url'];
    public $timestamps = false;

    public function usuario()
    {
        $this->belongsTo(Usuario::class, 'user_id');
    }
}
