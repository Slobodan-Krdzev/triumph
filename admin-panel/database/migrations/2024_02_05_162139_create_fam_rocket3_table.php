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
        Schema::create('fam_rocket3', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('familyPageBannerDesc')->nullable();
            $table->string('familyPageBannerVideo')->nullable();
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
        Schema::dropIfExists('fam_rocket3');
    }
};
