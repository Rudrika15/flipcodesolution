<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use Illuminate\Http\Request;

use App\Models\Appointment;
use App\Models\Salon;
use App\Models\Customer;
use Exception;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class AppointmentApiController extends Controller
{
    // GET methods
    public function index($id = null)
    {
        if (!isset($id)) {
            $results = Appointment::all();
        } else {
            $results = Appointment::where('id', $id)->first();
        }

        return $results;
    }

    public function byBusiness(Salon $business)
    {
        return Appointment::where('business_id', $business->id)->get();
    }

    public function byCustomer(Customer $customer)
    {
        return Appointment::where('customer_id', $customer->id)->get();
    }

    // POST
    public function store(Appointment $appointment)
    {
        request()->validate([
            'business_id' => 'required',
            'customer_id' => 'required',
            'appointment_at' => 'required',
            'phone_number' => 'required',
            'customer_name' => 'required'
        ]);

        return Appointment::create([
            'business_id' => request('business_id'),
            'customer_id' => request('customer_id'),
            'appointment_at' => request('appointment_at'),
            'phone_number' => request('phone_number'),
            'customer_name' => request('customer_name'),
            'booking_status' => "-1",
        ]);
    }

    // PUT
    public function update(Appointment $appointment)
    {
        request()->validate([
            'appointment_at' => 'required',
            'phone_number' => 'required',
            'customer_name' => 'required'
        ]);

        $result = $appointment->update([
            'appointment_at' => request('appointment_at'),
            'phone_number' => request('phone_number'),
            'customer_name' => request('customer_name')
        ]);

        return ["success" => $result];
    }

    public function reschedule(Appointment $appointment)
    {
        request()->validate([
            'appointment_at' => 'required'
        ]);

        $result = $appointment->update([
            'appointment_at' => request('appointment_at')
        ]);
        /* Logic needs to be re-written to check if:
            - Timeslot with total duration of all services in the appointment is available
        */

        return ["success" => $result];
    }

    // DELETE
    public function delete(Appointment $appointment)
    {
        $result = $appointment->delete();

        return ["success" => $result];
    }

    // getBookingUser
    public function getBookingUser($userId)
    {
        try {
            $result = Appointment::where('user_id', '=', $userId)
                ->with('getAppointmentUser.getService')
                ->get();
            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getBookingSalon($salonId)
    {
        try {
            $result = Appointment::where('salon_id', '=', $salonId)
                ->with('getAppointmentSalon.getService')
                ->get();
            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function cancelBookingUser($id)
    {
        // try {
        //  return $user_id = Auth::id();

        $bookingAppointment = Appointment::find($id);
        $bookingAppointment->booking_status = "0";
        if ($bookingAppointment) {
            $bookingAppointment->save();
            $response = [
                'success' => true,
                'bookingAppointment' => $bookingAppointment,
                'message' => 'Booking Appointment Deleted Successfully',
                'Status' => 204
            ];
            return response($response, 200);
        } else {
            return response([
                'message' => ['Booking Appointment Data No Found'],
                'data' => $bookingAppointment,
            ], 404);
        }
        
        // $result = Appointment::where('user_id', '=', $userId)->get();
        //     return Utils::successResponse($result);
        // } catch (Exception $ex) {
        //     return Utils::generalErrorResponse($ex);
        // }


        // $user = Appointment::join('users', 'users.id', '=', 'appointments.user_id')
        //     ->where('user_id', '=', $id)
        //     ->first();

        // $salon = Appointment::join('salons', 'salons.id', '=', 'appointments.salon_id')
        //     ->where('salon_id', '=', $id)
        //     ->first();


        // if ($user) {
        //     $userRole = $user->user_id;
        //     $salonRole = $salon->salon_id;

        //     // Now you can check the user's role and perform actions accordingly
        //     if ($userRole === 'user') {
        //         'Perform actions for user role';
        //     } elseif ($salonRole === 'salon') {
        //         'Perform actions for salon roles';
        //     } else {
        //         "other";
        //     }
        // } else {
        //     // User not found for the given $id
        // }

    }
}
