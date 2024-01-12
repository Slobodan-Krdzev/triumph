<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCarousellItem extends Model
{
    protected $fillable = [
        'video',
        'image',
        'title',
        'desc',
        'link1',
        'link2',
    ];

    // Define the attributes that should be cast to native types.
    protected $casts = [
        'link1' => 'json',
        'link2' => 'json',
    ];

    // Custom accessor to decode JSON fields
    public function getLink1Attribute($value)
    {
        return json_decode($value, true);
    }

    // Custom accessor to decode JSON fields
    public function getLink2Attribute($value)
    {
        return json_decode($value, true);
    }

    // Override toArray to include decoded JSON fields
    public function toArray()
    {
        $array = parent::toArray();

        $array['link1'] = $this->getLink1Attribute($this->attributes['link1']);
        $array['link2'] = $this->getLink2Attribute($this->attributes['link2']);

        return $array;
    }
}
