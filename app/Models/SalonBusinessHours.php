<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalonBusinessHours extends Model
{
    use HasFactory;

    protected $fillable = [
        'sunday_from',
        'sunday_to',
        'monday_from',
        'monday_to',
        'tuesday_from',
        'tuesday_to',
        'wednesday_from',
        'wednesday_to',
        'thursday_from',
        'thursday_to',
        'friday_from',
        'friday_to',
        'saturday_from',
        'saturday_to',
        'business_id'
    ];
}
