<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events_files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')
                ->constrained('events')
                ->onDelete('cascade');
            $table->string('url_files', 255);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events_files');
    }
};
