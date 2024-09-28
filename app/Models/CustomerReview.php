<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerReview extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'by_business_id',
        'user_id',
        'appointment_id',
        'rating',
        'review'
    ];
}
