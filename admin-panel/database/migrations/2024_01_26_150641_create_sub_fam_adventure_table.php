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
            $table->string('price')->nullable();
            $table->string('title');
            $table->string('subFamilyName');
            $table->string('url')->nullable();
            $table->json('subFamilyPageInfo')->nullable();
            $table->json('heroSlogans')->nullable();
            $table->string('youtubeVideo')->nullable();
            $table->json('engineTransmission')->nullable();
            $table->json('frame')->nullable();
            $table->json('dimension')->nullable();
            $table->json('fuelConsumption')->nullable();
            $table->json('grayCarousell')->nullable();
            $table->json('specNumbers')->nullable();
            $table->json('reasonsToDrive')->nullable();
            $table->json('gallery')->nullable();
            $table->json('accessory')->nullable();
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
