<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'urlSource',
        'urlImage',
        'dateStart',
        'dateEnd',
        'source',
        'source',
    ];

    public function sourceEvents(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(SourceEvents::class, 'source', 'id');
    }

    public function filesEvents(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(FilesEvents::class, 'id_event', 'id');
    }
}
