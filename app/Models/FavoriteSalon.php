<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FavoriteSalon extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'salon_id',
        'user_id'
    ];
}
