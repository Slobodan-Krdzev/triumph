<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdventureFam extends Model
{
    use HasFactory;

    protected $table = 'adventurefam';

    protected $fillable = [
        'mainBikeLogoImage',
        'topSectionInfo',
        'audioSection',
        'configPageInfo',
        'configFamilyPageInfo',
        'subFamilies',
        'type',
        'shortDesc',
        'familyPageBannerDesc',
        'promo',
        'familyPageBannerVideo'
    ];

    protected $casts = [
        'type' => 'json',
        'shortDesc' => 'json',
        'audioSection' => 'json',
        'mainBikeLogoImage' => 'json',
        'topSectionInfo' => 'json',
        'configPageInfo' => 'json',
        'configFamilyPageInfo' => 'json',
        'subFamilies' => 'json',
        'familyPageBannerDesc' => 'json',
        'promo' => 'json',
        'familyPageBannerVideo' => 'json',
    ];


}
