<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    protected $guarded = [];

    public function chefs_translation()
    {
        return $this->hasMany(ChefTranslation::class, 'chefs_id');
    }

    public function translation($locale)
    {
        return $this->chefs_translation()->where('language', $locale)->first();
    }
}
