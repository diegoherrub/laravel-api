<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'pub_date',
        'description',
        'link',
        'url_image',
        'created_at',
        'updated_at',
        ];

    public function newSource(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(NewSource::class, 'source_id');
    }
}
