<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'poster',
        'link',
        'calification',
        'director',
        'characters',
        'duration',
        'linkVideo',
        'synopsis',
        'linkTicket'
    ];

    public function movieTimes(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(MovieTimes::class, 'movie_id', 'id');
    }

    public function times(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Times::class, 'movietimes', 'movie_id', 'time_id');
    }
}
