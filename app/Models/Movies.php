<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    protected $fillable = [
       'title',
       'poster',
       'link',
       'calification',
       'director',
       'characters',
       'duration',
       'link_video',
       'synopsis',
       'link_ticket'
    ];

    public function movieTimes(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(MoviesTimes::class, 'movie_id');
    }
}
