<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubFamily extends Model
{
    use HasFactory;

    protected $table = 'sub_families';
    protected $fillable = [
        'family_id', 'price', 'title', 'model_name', 'subFamilyName', 'url', 'cc',
        'shortDesc', 'topSection', 'subFamilyPageInfo', 'heroSlogans', 'youtubeVideo', 'engineTransmission',
        'frame', 'dimension', 'fuelConsumption', 'grayCarousell', 'specNumbers',
        'reasonsToDrive', 'gallery', 'shortSpecInfo', 'accessory', 'specs', 'service', 'familyType', 'youtubeVideosCarousellItems'
    ];

    protected $casts = [
        'subFamilyPageInfo' => 'json',
        'heroSlogans' => 'json',
        'topSection' => 'json',
        'engineTransmission' => 'json',
        'frame' => 'json',
        'dimension' => 'json',
        'fuelConsumption' => 'json',
        'grayCarousell' => 'json',
        'specNumbers' => 'json',
        'reasonsToDrive' => 'json',
        'gallery' => 'json',
        'shortSpecInfo' => 'json',
        'accessory' => 'json',
        'specs' => 'json',
        'service' => 'json',
        'youtubeVideosCarousellItems' => 'json'
    ];
}
