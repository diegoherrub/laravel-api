<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pharmacies_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pharmacy_id');
            $table->string('range_date', 32);
            $table->unsignedInteger('day');
            $table->unsignedInteger('month');
            $table->unsignedInteger('year');
            $table->timestamps();
            $table->foreign('pharmacy_id')->references('id')->on('pharmacies')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pharmacies_schedules');
    }
};
