<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SalonAmenity extends Model
{
    use HasFactory;

    protected $fillable = [
        'salon_id',
        'amenity_id'
    ];
}
