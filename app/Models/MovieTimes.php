<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieTimes extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'movie_id',
        'time_id'
    ];

    public function movie(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Movie::class, 'movie_id', 'id');
    }

    public function times(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Times::class, 'time_id', 'id');
    }
}
