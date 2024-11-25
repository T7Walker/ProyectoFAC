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
        Schema::create('zones', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('meetingPoint');
            $table->unsignedBigInteger('buses_id'); // Asegúrate de que sea unsignedBigInteger
            $table->foreign('buses_id')->references('id')->on('buses')->onDelete('cascade'); // Relación correcta
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zones');
    }
};
