<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique();
            $table->foreignId('user_id')->nullable()->constrained('usuarios')->cascadeOnDelete();
            $table->text('title');
            $table->text('url');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
