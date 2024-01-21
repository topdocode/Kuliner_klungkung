<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $guarded = [];

    public function feedback_translation()
    {
        return $this->hasMany(FeedbackTranslation::class, 'feedback_id');
    }

    public function translation($locale)
    {
        return $this->feedback_translation()->where('language', $locale)->first();
    }
}
