<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'id',
        'title',
        'pub_date',
        'description',
        'link',
        'url_image',
        'source_id',
    ];

    public $incrementing = false; // El ID no es auto-incremental
    protected $keyType = 'string'; // El ID es un string

    /**
     * Relación con SourceNews.
     */
    public function source()
    {
        return $this->belongsTo(SourceNews::class, 'source_id');
    }
}
