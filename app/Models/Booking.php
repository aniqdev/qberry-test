<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'phone',
        'location_id',
        'volume',
        'tamperature',
        'date_from',
        'date_to',
    ];
}
