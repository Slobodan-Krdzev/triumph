<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassicsFam extends Model
{
    use HasFactory;

    protected $table = 'classicsfam';

    protected $fillable = [
        'type',
        'mainBikeLogoImage',
        'familyPageBannerDesc',
        'familyPageBannerVideo',
        'topSectionInfo',
        'promo',
        'configPageInfo',
        'configFamilyPageInfo',
    ];

    protected $casts = [
        'type' => 'json',
        'mainBikeLogoImage' => 'json',
        'topSectionInfo' => 'json',
        'configPageInfo' => 'json',
        'configFamilyPageInfo' => 'json',
        'familyPageBannerDesc' => 'json',
        'promo' => 'json',
        'familyPageBannerVideo' => 'json',
    ];
}
