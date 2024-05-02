<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'service_category',
        'icon_url'
    ];

    public function serviceTypes()
    {
        return $this->hasMany('App\Models\ServiceType', 'service_category_id');
    }

    public function servicesOffered()
    {
        return $this->hasManyThrough(Service::class, ServiceType::class);
    }

    
}
