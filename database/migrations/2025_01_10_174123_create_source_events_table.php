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
        Schema::create('source_events', function (Blueprint $table) {
            $table->string('id', 32)->primary(); // Clave primaria
            $table->string('name', 32)->unique();
            $table->string('urlSource', 128);
            $table->string('urlImage', 128);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('source_events');
    }
};
