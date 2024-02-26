<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatestCarousell extends Model
{
    use HasFactory;

    protected $table = 'latest-models-carousell-items';

    protected $fillable = ['title', 'desc', 'url', 'image'];

}
