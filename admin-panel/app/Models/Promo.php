<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    protected $table = 'promo';
    protected $fillable = ['fam_adventure_id', 'promo_data'];

    public function famAdventure()
    {
        return $this->belongsTo(FamAdventure::class, 'fam_adventure_id');
    }
}
