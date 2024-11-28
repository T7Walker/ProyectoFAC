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
        Schema::create('publicacions', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique(); // ID unico y con autoincremento.
            $table->foreignId('user_id')->nullable()->constrained('usuarios')->cascadeOnDelete(); // Llave foranea que se llama user_id, esta conectada con usuarios y es cambiante por relacion por el cascadeOnDelete.
            $table->text('content'); // En vez de varchar, se usa text, para mayor compatibilidad con otras bases de datos, como postgressmigrations.
            $table->text('url_file');
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicacions');
    }
};
