<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('source_id');
            $table->string('title', 128);
            $table->date('pub_date');
            $table->string('description', 128);
            $table->string('link', 128);
            $table->string('url_image', 128);
            $table->foreign('source_id')
                ->references('id')
                ->on('new_sources')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
