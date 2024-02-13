<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromoSport extends Model
{
    use HasFactory;

    protected $table = 'promo_sports';
    protected $fillable = ['promo_data'];
}
