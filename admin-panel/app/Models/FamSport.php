<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamSport extends Model
{
    use HasFactory;


    protected $table = 'fam_sport';

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
