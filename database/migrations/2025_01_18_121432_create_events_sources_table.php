<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events_sources', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')
                ->constrained('events')
                ->onDelete('cascade');
            $table->string('name', 128);
            $table->string('url_source', 255);
            $table->string('url_image', 255);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events_sources');
    }
};
