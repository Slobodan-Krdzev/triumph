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
        Schema::create('motorcycles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('model');
            $table->string('category');
            $table->string('subFamilyCategory');
            $table->string('edition');
            $table->string('price')->nullable();
            $table->string('desc')->nullable();
            $table->json('specs')->nullable();
            $table->json('gallery');
            $table->json('bikeCollorPalletteGallery')->nullable();
            $table->json('customizationColors')->nullable();
            $table->json('shortSpecInfo')->nullable();
            $table->json('bikePageCarousell')->nullable();
            $table->json('features')->nullable();
            $table->json('subFamilyPromo')->nullable();
            $table->json('bikePageInfo')->nullable();
            $table->json('bikePagePromo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motorcycles');
    }
};
