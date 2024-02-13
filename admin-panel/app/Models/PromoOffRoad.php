<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromoOffRoad extends Model
{
    use HasFactory;

    protected $table = 'promo_offroad';
    protected $fillable = ['promo_data'];
}
