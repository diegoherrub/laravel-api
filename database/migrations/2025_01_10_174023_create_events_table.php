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
        Schema::create('events', function (Blueprint $table) {
            $table->string('id', 32)->primary(); // Clave primaria
            $table->string('title', 128);
            $table->string('urlSource', 128);
            $table->string('urlImage', 128);
            $table->string('dateStart', 16);
            $table->string('dateEnd', 16);
            $table->string('source', 32);
            $table->foreign('source')->references('id')->on('source_events')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
