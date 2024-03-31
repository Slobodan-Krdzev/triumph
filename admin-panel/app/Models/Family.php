<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;

    protected $table = 'families';

    protected $fillable = [
        'type',
        'mainBikeLogoImage',
        'familyPageBannerDesc',
        'familyPageBannerVideo',
        'configPageInfo',
        'configFamilyPageInfo',
        'grayCaro',
        'youtubeVideo',
        'audioSection'];

    protected $casts = [
        'mainBikeLogoImage' => 'json',
        'configPageInfo' => 'json',
        'configFamilyPageInfo' => 'json',
        'grayCaro' => 'json',
        'audioSection' => 'json',
    ];


}
