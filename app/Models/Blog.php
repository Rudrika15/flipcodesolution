<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'photo',
        'detail',
        'slug',
        'techid'
    ];


    function tech()
    {
        return $this->hasOne(Technology::class, 'id', 'techid');
    }
}
