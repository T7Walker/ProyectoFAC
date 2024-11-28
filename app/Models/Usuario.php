<?php

namespace App\Models;

use App\Models\Libro;
use App\Models\Publicacion;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table = "usuarios";
    protected $fillable = ['name', 'email', 'password', 'date_creation'];
    public $timestamps = false;

    public function libro()
    {
        $this->hasOne(Libro::class, 'user_id');
    }

    public function publicacion()
    {
        $this->hasOne(Publicacion::class, 'user_id');
    }
}
