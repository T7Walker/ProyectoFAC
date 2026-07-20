<?php

namespace App\Models;

use App\Models\Libro;
use App\Models\Publicacion;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Usuario extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = "usuarios";
    protected $fillable = ['name', 'email', 'password', 'date_creation', 'urlimg'];
    public $timestamps = false;

    /**
     * Un usuario puede tener múltiples libros.
     */
    public function libros(): HasMany
    {
        return $this->hasMany(Libro::class, 'user_id');
    }

    /**
     * Un usuario puede tener múltiples publicaciones.
     */
    public function publicaciones(): HasMany
    {
        return $this->hasMany(Publicacion::class, 'user_id');
    }
}