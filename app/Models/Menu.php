<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = [];

    public function menus_translation()
    {
        return $this->hasMany(MenuTranslation::class, 'menus_id');
    }

    public function translation($locale)
    {
        return $this->menus_translation()->where('language', $locale)->first();
    }
}
