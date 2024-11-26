<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Relación de publicaciones
    public function publications(){
        return $this->hasMany(Publications::class);
    }

    // Relación de libros
    public function books () {
        return $this->hasMany(Books::class);
    }

    // Relación de mapas
    public function maps () {
        return $this->hasMany(Maps::class);
    }

    // Campos que pueden ser asignados masivamente
    protected $fillable = [
        'name', 'email', 'password', // Asegúrate de incluir el campo role aquí
    ];

    // Campos ocultos para la serialización
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Cast para los tipos de datos
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
