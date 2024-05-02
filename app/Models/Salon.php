<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    use HasFactory;

    protected $fillable = [
        'partner_id',
        'salon_type_id',
        'salon_name',
        'shop_profile_pic_url',
        'salon_legal_name',
        'address',
        'area',
        'city',
        'state',
        'country',
        'postcode',
        'latitude',
        'longitude',
        'phone_number',
        'website',
        'twitter',
        'facebook',
        'instagram',
        'pinterest',
        'show_barber_details',
        'sunday_from',
        'sunday_to',
        'monday_from',
        'monday_to',
        'tuesday_from',
        'tuesday_to',
        'wednesday_from',
        'wednesday_to',
        'thursday_from',
        'thursday_to',
        'friday_from',
        'friday_to',
        'saturday_from',
        'saturday_to',
        'about',
        'email_verification_time'
    ];

    public function salonType()
    {
        return $this->hasOne(SalonType::class, 'id', 'salon_type_id');
    }

    public function getSalonTypeAttribute()
    {
        return $this->salonType()->firstOrFail();
    }

    public function reviews()
    {
        return $this->hasMany(SalonReview::class, 'salon_id', 'id');
    }

    public function getReviewsAttribute()
    {
        return $this->reviews()->get()->sortByDesc('updated_at');
    }

    public function getRatingsAttribute()
    {
        return $this->reviews()->avg('rating');
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'salon_id', 'id');
    }

    public function getPhotosAttribute()
    {
        return $this->galleries()->where('media_type', 'image')->get();
    }

    public function getVideosAttribute()
    {
        return $this->galleries()->where('media_type', 'video')->get();
    }

    // Appointments
    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'salon_id', 'id');
    }

    // services
    public function services()
    {
        return $this->hasMany(Service::class, 'salon_id');
    }

    public function salonServiceCategory()
    {
        return $this->hasMany(salonServiceCategory::class, 'salon_id');
    }
    public function getServicesAttribute()
    {
        $salon_id = $this->id;
        $services = ServiceCategory::with(['serviceTypes.salonServiceCategory' => function ($q) use ($salon_id) {
            $q->where('salon_id', $salon_id);
        }])->get();

        return $services;
    }
    
}