<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventsFiles extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'url_files'
    ];

    public function events(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Events::class);
    }
}
