<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SalonReview extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'salon_id',
        'by_user_id',
        'appointment_id',
        'rating',
        'review'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'by_user_id', 'id');
    }

    protected function getUserAttribute()
    {
        return $this->user()->firstOrFail(['id', 'name', 'profile_pic_url']);
    }

    public function salon()
    {
        return $this->belongsTo(Salon::class, 'salon_id', 'id');
    }
}
