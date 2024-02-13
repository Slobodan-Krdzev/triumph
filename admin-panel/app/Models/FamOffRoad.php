<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamOffRoad extends Model
{
    use HasFactory;
    protected $table = 'fam_offroad';

    protected $fillable = [
        'type',
        'familyPageBannerDesc',
        'familyPageBannerVideo',
        'configPageInfo',
        'configFamilyPageInfo',
        'grayCaro',
        'youtubeVideo'
    ];

    protected $casts = [
        'configPageInfo' => 'array',
        'configFamilyPageInfo' => 'array',
        'grayCaro' => 'array',
    ];
}
