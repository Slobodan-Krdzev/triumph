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
        Schema::create('main-carousell-items', function (Blueprint $table) {
            $table->id();
            $table->string('video')->nullable();
            $table->string('image')->nullable();
            $table->string('imageMobile');
            $table->string('title');
            $table->text('desc');
            $table->json('link1');
            $table->json('link2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main-carousell-items');
    }
};
