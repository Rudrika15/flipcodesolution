<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FirebaseDevice extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'platform',
        'deviceToken',
        'deviceId',
        'deviceInfo'
    ];
}
