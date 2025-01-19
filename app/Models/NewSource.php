<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewSource extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url_image',
        'url_source',
        'created_at',
        'modified_at'
    ];

    public function news(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(News::class, 'source_id');
    }
}
