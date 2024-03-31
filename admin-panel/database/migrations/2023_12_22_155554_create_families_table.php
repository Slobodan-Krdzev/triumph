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
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->json('mainBikeLogoImage')->nullable();
            $table->text('familyPageBannerDesc')->nullable();
            $table->string('familyPageBannerVideo')->nullable();
            $table->json('configPageInfo')->nullable();
            $table->string('youtubeVideo')->nullable();
            $table->json('grayCaro')->nullable();
            $table->json('configFamilyPageInfo')->nullable();
            $table->json('audioSection')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('families');
    }
};
