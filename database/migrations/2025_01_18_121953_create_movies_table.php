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
            $table->id();
            $table->string('title', 128);
            $table->string('poster', 128);
            $table->string('link', 128);
            $table->string('calification', 8);
            $table->string('director', 128);
            $table->text('characters');
            $table->string('duration', 8);
            $table->string('link_video', 255);
            $table->text('synopsis');
            $table->string('link_ticket', 255);
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
