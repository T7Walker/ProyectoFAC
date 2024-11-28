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
        Schema::create('r_zonas_busetas', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique();
            $table->foreignId('zone_id')->nullable()->constrained('zonas')->cascadeOnDelete();
            $table->foreignId('bus_id')->nullable()->constrained('busetas')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_zonas_busetas');
    }
};
