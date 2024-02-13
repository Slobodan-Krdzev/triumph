<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubFamAdventure extends Model
{
    use HasFactory;

    protected $table = 'sub_fam_adventure';
    protected $fillable = [
        'family_id', 'price', 'title', 'model_name', 'subFamilyName', 'url',
        'subFamilyPageInfo', 'heroSlogans', 'youtubeVideo', 'engineTransmission',
        'frame', 'dimension', 'fuelConsumption', 'grayCarousell', 'specNumbers',
        'reasonsToDrive', 'gallery', 'shortSpecInfo', 'accessory', 'specs', 'service','familyType','youtubeVideosCarousellItems'
    ];

    protected $casts = [
        'subFamilyPageInfo' => 'json',
        'heroSlogans' => 'json',
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



    public function famAdventure()
    {
        return $this->belongsTo(FamAdventure::class, 'family_id');
    }
}
