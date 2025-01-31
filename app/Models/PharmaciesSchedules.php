<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PharmaciesSchedules extends Model
{
    use HasFactory;

    protected $fillable = [
        'pharmacy_id',
        'schedule_on_call'
    ];
}
