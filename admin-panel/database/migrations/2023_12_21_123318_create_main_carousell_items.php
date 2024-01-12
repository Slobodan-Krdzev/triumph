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
        Schema::create('main_carousell_items', function (Blueprint $table) {
            $table->id();
            $table->string('video')->default('/default/video/path.mp4');
            $table->string('image');
            $table->string('title');
            $table->text('desc');
            $table->json('link1');
            $table->json('link2')->default(json_encode(['url' => '', 'text' => '']));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_carousell_items');
    }
};
