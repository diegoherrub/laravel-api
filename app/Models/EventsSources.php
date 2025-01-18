<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventsSources extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'name',
        'url_source',
        'url_image',
    ];

    public function events(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Events::class);
    }
}
