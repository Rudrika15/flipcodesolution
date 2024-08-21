<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceType extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'service_type',
        'icon_url',
        'service_category_id',
    ];

    public function service_category()
    {
        return $this->belongsTo('App\Models\ServiceCategory', 'service_category_id');
    }

    protected function getServiceCategoryAttribute()
    {
        return $this->service_category()->firstOrFail();
    }

    public function services()
    {
        return $this->hasMany('App\Models\Service', 'service_type_id');
    }
    protected function getServicesAttribute()
    {
        return $this->services()->get();
    }

    public function serviceCategory()
    {
        return $this->belongsTo(ServiceCategory::class);
    }
    public function salonServiceCategory()
    {
        return $this->hasMany(SalonServiceCategory::class,'service_category_id');
    }

}
