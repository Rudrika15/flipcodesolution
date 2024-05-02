<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AppointmentService extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'appointment_id',
        'service_id',
        'barber_id'
    ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class, 'appointment_id');
    }
    protected function getAppointmentAttribute()
    {
        return $this->appointment()->firstOrFail();
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
    protected function getServiceAttribute()
    {
        return $this->service()->firstOrFail();
    }

    public function barber()
    {
        return $this->belongsTo(Barber::class, 'barber_id');
    }
    protected function getBarberAttribute()
    {
        return $this->barber()->firstOrFail();
    }

    public function getService()
    {
        return $this->hasMany(Service::class, 'id','service_id');
    }
}
