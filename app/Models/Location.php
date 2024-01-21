<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $guarded = [];

    public function locations_translation()
    {
        return $this->hasMany(LocationTranslation::class, 'locations_id');
    }

    public function translation($locale)
    {
        return $this->locations_translation()->where('language', $locale)->first();
    }
}
