<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique(); // ID unico y con autoincremento.
            $table->text('name'); // En vez de varchar, se usa text, para mayor compatibilidad con otras bases de datos, como postgressmigrations.
            $table->text('email');
            $table->text('password')->unique();
            $table->text('urlimg');
            $table->date('date_creation');
            $table->rememberToken(); // Aqui se guardara el token de inicio de sesion o las cookies por asi decirlo.
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
