<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Times extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'time'
    ];

    public function movieTimes(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(MovieTimes::class, 'time_id', 'id');
    }

    public function movies(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Movie::class, 'movietimes', 'time_id', 'movie_id');
    }
}
