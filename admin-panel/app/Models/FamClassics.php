<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamClassics extends Model
{
    use HasFactory;

    protected $table = 'fam_classics';

    protected $fillable = [
        'type',
        'familyPageBannerDesc',
        'familyPageBannerVideo',
        'configPageInfo',
        'configFamilyPageInfo',
        'grayCaro',
    ];

    protected $casts = [
        'configPageInfo' => 'array',
        'configFamilyPageInfo' => 'array',
        'grayCaro' => 'array',
    ];
}
