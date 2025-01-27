<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'url',
        'address',
        'created_at',
        'updated_at'
    ];
}
