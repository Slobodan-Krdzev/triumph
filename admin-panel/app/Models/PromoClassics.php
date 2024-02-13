<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromoClassics extends Model
{
    use HasFactory;

    protected $table = 'promo_classics';
    protected $fillable = ['promo_data'];

}
