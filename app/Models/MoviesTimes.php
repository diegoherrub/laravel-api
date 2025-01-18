<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoviesTimes extends Model
{
    use HasFactory;

    protected $fillable = [
        'movie_id',
        'time'
    ];

    public function timesMovie(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Movies::class);
    }
}
