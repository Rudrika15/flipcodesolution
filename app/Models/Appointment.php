<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Appointment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'salon_id',
        'user_id',
        'appointment_date',
        'appointment_time',
        'appointment_datetime',
        'appointment_end_time',
        'duration',
        'notes',
        'fulfilled',
        'reason_for_absence',
        'phone_number',
        'customer_name',
        'booking_status',
    ];

    public function salon()
    {
        return $this->hasOne(Salon::class, 'id', 'salon_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    protected function getUserAttribute()
    {
        return $this->user()->firstOrFail(['id', 'name', 'profile_pic_url']);
    }

    public function appointment_services()
    {
        return $this->hasMany(AppointmentService::class, 'appointment_id');
    }

    public function getAppointmentServicesAttribute()
    {
        return AppointmentService::with(['barber','service.service_type.service_category'])
            ->where('appointment_id', $this->id)
            ->get();
    }

    public function getAppointmentUser()
    {
        return $this->hasMany(AppointmentService::class, 'appointment_id', 'id');

    }

    public function getAppointmentSalon()
    {
        return $this->hasMany(AppointmentService::class, 'service_id', 'id');

    }
}