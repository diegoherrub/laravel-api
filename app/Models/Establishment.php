<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'direction',
        'phone',
        'image',
        'latitude',
        'longitude',
        'created_at',
        'updated_at',
    ];
}
