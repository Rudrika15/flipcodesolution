<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalonType extends Model
{
    use HasFactory;

    protected $fillable = [
        'salon_type'
    ];

    public function salons()
    {
        return $this->hasMany(Salon::class);
    }
}
