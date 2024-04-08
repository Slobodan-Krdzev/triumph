<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LatestCarousell extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'latest_carousell';

    protected $fillable = ['title', 'desc', 'url', 'image'];

}
