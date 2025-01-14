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
        Schema::create('movies', function (Blueprint $table) {
            $table->string('id', 32)->primary();
            $table->string('title', 128);
            $table->string('poster', 128);
            $table->string('link', 128);
            $table->string('calification', 50)->nullable();
            $table->string('director', 255);
            $table->string('characters', 255)->nullable();
            $table->string('duration', 50)->nullable();
            $table->string('linkVideo', 255)->nullable();
            $table->text('synopsis')->nullable();
            $table->string('linkTicket', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
