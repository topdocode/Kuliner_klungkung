<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $guarded = [];

    public function histories_translation()
    {
        return $this->hasMany(HistoriesTranslation::class, 'menus_id');
    }

    public function translation($locale)
    {
        return $this->histories_translation()->where('language', $locale)->first();
    }
}
