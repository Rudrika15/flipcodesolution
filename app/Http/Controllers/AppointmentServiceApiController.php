<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AppointmentService;
use App\Models\Appointment;

class AppointmentServiceApiController extends Controller
{
    // GET methods
    public function index($id = null) {
        if(!isset($id)) {
            $results = AppointmentService::all();
        }
        else {
            $results = AppointmentService::where('id', $id)->first();
        }

        return $results;
    }

    public function byAppointment(Appointment $appointment) {
        return AppointmentService::where('appointment_id', $appointment->id)->get();
    }

    // POST
    public function store(AppointmentService $appointmentService) {
        request()->validate([
            'appointment_id' => 'required',
            'service_id' => 'required',
            'barber_id' => 'required'
        ]);

        return AppointmentService::create([
            'appointment_id' => request('appointment_id'),
            'service_id' => request('service_id'),
            'barber_id' => request('barber_id')
        ]);
    }

    // PUT method
    public function update(AppointmentService $appointmentService) {
        request()->validate([
            'appointment_id' => 'required',
            'service_id' => 'required',
            'barber_id' => 'required'
        ]);

        $result = $appointmentService->update([
            'appointment_id' => request('appointment_id'),
            'service_id' => request('service_id'),
            'barber_id' => request('barber_id')
        ]);

        return ["success" => $result];
    }

    // DELETE method
    public function delete(AppointmentService $appointmentService) {
        $result = $appointmentService->delete();

        return ["success" => $result];
    }
}
