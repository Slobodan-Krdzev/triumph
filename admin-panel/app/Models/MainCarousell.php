<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MainCarousell extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'main_carousell';

    protected $fillable = ['video', 'image', 'imageMobile', 'title', 'desc', 'link1', 'link2'];


    protected $casts = [
        'link1' => 'json',
        'link2' => 'json',
    ];
}
