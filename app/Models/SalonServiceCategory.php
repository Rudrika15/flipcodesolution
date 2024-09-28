<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalonServiceCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'salon_id',
        'service_category_id'
    ];
}
