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
        Schema::create('fam_classics', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('familyPageBannerDesc')->nullable();
            $table->string('familyPageBannerVideo');
            $table->json('configPageInfo');
            $table->json('configFamilyPageInfo');
            $table->json('grayCaro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fam_classics');
    }
};