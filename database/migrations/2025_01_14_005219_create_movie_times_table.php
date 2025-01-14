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
        Schema::create('movietimes', function (Blueprint $table) {
            $table->string('id', 32)->primary(); // ID de la relación
            $table->string('movie_id', 32); // ID de la película
            $table->string('time_id', 32); // ID del horario
            $table->timestamps(); // Timestamps para created_at y updated_at

            // Claves foráneas
            $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');
            $table->foreign('time_id')->references('id')->on('times')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie_times');
    }
};
