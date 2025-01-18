<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'url_source',
        'url_image',
        'date_start',
        'date_end',
    ];

    public function eventSources(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(EventsSources::class, 'event_id');
    }

    public function eventFiles(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(EventsFiles::class, 'event_id');
    }

}
