<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SourceNews extends Model
{
    use HasFactory;

    protected $table = 'sources_news';

    protected $fillable = [
        'id',
        'name',
        'url_image',
        'url_source',
    ];

    public $incrementing = false; // El ID no es auto-incremental
    protected $keyType = 'string'; // El ID es un string

    /**
     * Relación con News.
     */
    public function news()
    {
        return $this->hasMany(News::class, 'source_id');
    }
}
