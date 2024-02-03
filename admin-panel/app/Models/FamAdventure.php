<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamAdventure extends Model
{
    use HasFactory;

    protected $table = 'fam_adventure';
    protected $fillable = [
        'type', 'mainBikeLogoImage', 'familyPageBannerDesc', 'familyPageBannerVideo',
        'topSectionInfo', 'configPageInfo', 'configFamilyPageInfo'
    ];

    protected $casts = [
        'mainBikeLogoImage' => 'json',
        'topSectionInfo' => 'json',
        'configPageInfo' => 'json',
        'configFamilyPageInfo' => 'json'
    ];

    public function subFamAdventures()
    {
        return $this->hasMany(SubFamAdventure::class, 'family_id');
    }

    public function promos()
    {
        return $this->hasMany(Promo::class, 'fam_adventure_id');
    }
}
