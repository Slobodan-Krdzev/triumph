<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamRoadsters extends Model
{
    use HasFactory;

    protected $table = 'fam_roadsters';

    protected $fillable = [
        'type',
        'familyPageBannerDesc',
        'familyPageBannerVideo',
        'configPageInfo',
        'configFamilyPageInfo',
        'audioSection',
    ];

    protected $casts = [
        'configPageInfo' => 'array',
        'configFamilyPageInfo' => 'array',
        'audioSection' => 'array',
    ];

}
