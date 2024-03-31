<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCarousell extends Model
{
    use HasFactory;

    protected $table = 'main_carousell';

    protected $fillable = ['video', 'image', 'imageMobile', 'title', 'desc', 'link1', 'link2'];


    protected $casts = [
        'link1' => 'json',
        'link2' => 'json',
    ];
}
