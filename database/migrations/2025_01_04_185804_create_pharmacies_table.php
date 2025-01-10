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
        Schema::create('pharmacies', function (Blueprint $table) {
            $table->id(); // id INT NOT NULL AUTO_INCREMENT PRIMARY KEY
            $table->string('name_pharmacy', 32); // VARCHAR(32) NOT NULL UNIQUE
            $table->string('range_date', 32); // VARCHAR(32) NOT NULL
            $table->string('location', 64); // VARCHAR(64) NOT NULL
            $table->string('phone', 16); // VARCHAR(16) NOT NULL
            $table->string('day', 2); // VARCHAR(2) NOT NULL
            $table->string('month', 16); // VARCHAR(16) NOT NULL
            $table->timestamps(); // createdAt equivalente en Laravel: created_at y updated_at automáticos
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pharmacies');
    }
};
