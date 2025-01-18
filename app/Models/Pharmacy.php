<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_pharmacy',
        'location',
        'phone',
        'created_at',
        'updated_at'
    ];

    public function pharmaciesSchedules(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(PharmaciesSchedules::class, 'pharmacy_id');
    }
}
