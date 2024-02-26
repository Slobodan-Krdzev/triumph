<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCarousell extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['video', 'image', 'imageMobile', 'title', 'desc', 'link1', 'link2'];

    protected $table = 'main-carousell-items';

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'link1' => 'array',
        'link2' => 'array',
    ];

}
