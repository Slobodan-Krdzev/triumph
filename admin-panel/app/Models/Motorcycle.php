<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Motorcycle extends Model
{
    use HasFactory;

    protected $table = 'motorcycles';


    protected $fillable = [
        'title',
        'model',
        'category',
        'subFamilyCategory',
        'edition',
        'price',
        'desc',
        'specs',
        'gallery',
        'bikeCollorPalletteGallery',
        'customizationColors',
        'shortSpecInfo',
        'bikePageCarousell',
        'features',
        'subFamilyPromo',
        'bikePagePromo'
    ];

    protected $casts = [
        'gallery' => 'json',
        'specs' => 'json',
        'bikeCollorPalletteGallery' => 'json',
        'customizationColors' => 'json',
        'shortSpecInfo' => 'json',
        'bikePageCarousell' => 'json',
        'features' => 'json',
        'subFamilyPromo' => 'json',
        'bikePageInfo' => 'json',
        'bikePagePromo' => 'json'
    ];


}
