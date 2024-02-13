<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamRocket3 extends Model
{
    use HasFactory;

    protected $table = 'fam_rocket3';

    protected $fillable = [
        'type',
        'familyPageBannerDesc',
        'familyPageBannerVideo',
        'configPageInfo',
        'configFamilyPageInfo',
    ];

    protected $casts = [
        'configPageInfo' => 'array',
        'configFamilyPageInfo' => 'array',
    ];

}
