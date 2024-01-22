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
        Schema::create('adventurefam', function (Blueprint $table) {
            $table->id();
            $table->json('type');
            $table->json('mainBikeLogoImage')->nullable();
            $table->json('familyPageBannerDesc')->nullable();
            $table->json('familyPageBannerVideo')->nullable();
            $table->json('topSectionInfo')->nullable();
            $table->json('audioSection')->nullable();
            $table->json('promo')->nullable();
            $table->json('configPageInfo')->nullable();
            $table->json('configFamilyPageInfo')->nullable();
            $table->json('subFamilies')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adventurefam');
    }
};
