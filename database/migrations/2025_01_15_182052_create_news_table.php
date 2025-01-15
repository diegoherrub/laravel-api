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
        Schema::create('news', function (Blueprint $table) {
            $table->string('id', 32)->primary();
            $table->string('title', 128);
            $table->dateTime('pub_date');
            $table->string('description', 128)->nullable();
            $table->string('link', 128);
            $table->string('url_image', 128)->nullable();
            $table->string('source_id', 32);

            $table->foreign('source_id')
                ->references('id')
                ->on('sources_news')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
