<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('establishments', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['bar', 'restaurant', 'hotel'])->nullable();
            $table->string('name', 128);
            $table->string('direction', 128);
            $table->string('phone', 16);
            $table->text('image');
            $table->decimal('latitude', 18, 15);
            $table->decimal('longitude', 18, 15);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('establishment');
    }
};
