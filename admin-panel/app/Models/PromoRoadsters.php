<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromoRoadsters extends Model
{
    use HasFactory;

    protected $table = 'promo_roadsters';
    protected $fillable = ['promo_data'];
}
