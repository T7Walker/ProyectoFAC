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
        Schema::create('r_mapas_zonas', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique(); // ID unico y con autoincremento.
            $table->foreignId('map_id')->nullable()->constrained('mapas')->cascadeOnDelete(); // Llave foranea que se llama map_id, esta conectada con mapas y es cambiante por relacion por el cascadeOnDelete.
            $table->foreignId('zone_id')->nullable()->constrained('zonas')->cascadeOnDelete(); // Llave foranea que se llama zone_id, esta conectada con zonas y es cambiante por relacion por el cascadeOnDelete.
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_mapas_zonas');
    }
};
