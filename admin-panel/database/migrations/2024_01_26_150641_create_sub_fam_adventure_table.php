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
        Schema::create('sub_fam_adventure', function (Blueprint $table) {
            $table->id();
            $table->foreignId('family_id')->constrained('fam_adventure')->default('1');
            $table->string('price');
            $table->string('title');
            $table->string('model_name');
            $table->string('subFamilyName');
            $table->string('url');
            $table->json('subFamilyPageInfo');
            $table->json('heroSlogans');
            $table->string('youtubeVideo');
            $table->json('engineTransmission');
            $table->json('frame');
            $table->json('dimension');
            $table->json('fuelConsumption');
            $table->json('grayCarousell');
            $table->json('specNumbers');
            $table->json('reasonsToDrive');
            $table->json('gallery');
            $table->json('accessory');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_fam_adventure');
    }
};
