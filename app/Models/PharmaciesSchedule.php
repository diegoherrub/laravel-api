<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PharmaciesSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'pharmacy_id',
        'range_date',
        'day',
        'month'
    ];

    public function pharmacy(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Pharmacy::class);
    }
}
