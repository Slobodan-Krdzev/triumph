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
        Schema::create('main_carousell', function (Blueprint $table) {
            $table->id();
            $table->string('video')->nullable();
            $table->string('image')->nullable();
            $table->string('imageMobile')->nullable();
            $table->string('title');
            $table->text('desc')->nullable();
            $table->json('link1')->nullable();
            $table->json('link2')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('main_carousell');
    }
};
