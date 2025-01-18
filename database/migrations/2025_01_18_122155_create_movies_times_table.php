<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('movies_times', function (Blueprint $table) {
            $table->id();
            $table->foreignId('movie_id')
            ->constrained('movies')
            ->onDelete('cascade');
            $table->string('time', 32);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies_times');
    }
};
