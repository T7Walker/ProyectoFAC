<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('busetas', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique(); // ID unico y con autoincremento.
            $table->text('company'); // En vez de varchar, se usa text, para mayor compatibilidad con otras bases de datos, como postgressmigrations.
            $table->text('route_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('busetas');
    }
};
