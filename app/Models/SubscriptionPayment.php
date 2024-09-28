<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubscriptionPayment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'salon_id',
        'subscription_id',
        'amount',
        'payment_on'
    ];
}