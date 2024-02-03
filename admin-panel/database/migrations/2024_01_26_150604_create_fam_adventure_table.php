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
        Schema::create('fam_adventure', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->json('mainBikeLogoImage');
            $table->longText('familyPageBannerDesc');
            $table->string('familyPageBannerVideo');
            $table->json('topSectionInfo');
            $table->json('configPageInfo');
            $table->json('configFamilyPageInfo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fam_adventure');
    }
};
