<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use App\Models\Appointment;
use App\Models\AppointmentService;
use App\Models\Barber;
use App\Models\FavoriteSalon;
use App\Models\Offer;
use App\Models\Salon;
use App\Models\SalonReview;
use App\Models\SalonType;
use App\Models\Service;
use App\Models\ServiceType;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\JsonResponse;

class CombersApiController extends Controller
{
    // region HOME SCREEN

    public function getUserProfile()
    {
        try {
            $user_id = Auth::id();
            $user = User::where('id', $user_id)->firstOrFail();

            return Utils::successResponse($user);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getFavoriteSalons()
    {
        try {
            $user_id = Auth::id();

            $salon_ids = FavoriteSalon::where('user_id', $user_id)->get()->pluck('salon_id')->toArray();
            $salons = Salon::whereIn('id', $salon_ids)->get();

            return Utils::successResponse($salons);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getOffers()
    {
        try {
            $offers = Offer::where('end_date', '>', today())->get();
            return Utils::successResponse($offers);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getAppointments()
    {
        try {
            $appointments = Appointment::with('salon')
                ->where('user_id', Auth::id())
                ->orderByDesc('appointment_datetime')
                ->get();

            return Utils::successResponse($appointments);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getUpcomingAppointments()
    {
        try {
            $user_id = Auth::id();

            $appointments = Appointment::with('salon')->where(
                [
                    ['user_id', '=', $user_id],
                    ['appointment_datetime', '>', Carbon::now()->format('Y-m-d H:i:s')]
                ]
            )->get();

            return Utils::successResponse($appointments);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getSalonTypes()
    {
        try {
            return Utils::successResponse(SalonType::all());
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getSalonsByType($salon_type_id)
    {
        try {
            return Utils::successResponse(Salon::where('salon_type_id', $salon_type_id)->get());
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getServiceTypes()
    {
        try {
            return Utils::successResponse(ServiceType::all());
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getSalonsByServiceType($service_type_id)
    {
        try {
            $salon_ids = Service::where('service_type_id', $service_type_id)->pluck('salon_id')->toArray();
            return Utils::successResponse(Salon::whereIn('id', $salon_ids)->get());
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getSalonsByRatings()
    {
        try {
            $avg_ratings = SalonReview::selectRaw('salon_id, AVG(rating) ratings')->groupBy('salon_id')->get()->sortByDesc('ratings')->toArray();

            $salons = Salon::whereIn('id', array_column($avg_ratings, 'salon_id'))->get();
            $salons->each->append('ratings');

            $salons_desc = $salons->sortByDesc('ratings', SORT_NATURAL);

            return Utils::successResponse($salons_desc->values());
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getSalonServices($salon_id)
    {
        try {
            $salon = Salon::where('id', $salon_id)->firstOrFail();
            $salon->append('services');

            return Utils::successResponse($salon);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getSalonFull($salon_id)
    {
        try {
            $salon = Salon::where('id', $salon_id)->firstOrFail();
            $salon->append('services');
            $salon->append('ratings');
            $salon->append('reviews');
            $salon->append('photos');
            $salon->append('videos');

            return Utils::successResponse($salon);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    // endregion

    // region Get All Slots
    public function getAllSlots($salon_id, $date, $duration)
    {
        try {
            $salon = Salon::where('id', $salon_id)->firstOrFail();

            $slot_duration = $duration; // slot_duration

            $day = Carbon::createFromFormat('Y-m-d', $date)->format('l');
            switch ($day) {
                case ('Sunday'):
                    $duration = array($salon->sunday_from, $salon->sunday_to);
                    break;
                case ('Monday'):
                    $duration = array($salon->monday_from, $salon->monday_to);
                    break;
                case ('Tuesday'):
                    $duration = array($salon->tuesday_from, $salon->tuesday_to);
                    break;
                case ('Wednesday'):
                    $duration = array($salon->wednesday_from, $salon->wednesday_to);
                    break;
                case ('Thursday'):
                    $duration = array($salon->thursday_from, $salon->thursday_to);
                    break;
                case ('Friday'):
                    $duration = array($salon->friday_from, $salon->friday_to);
                    break;
                default:
                    $duration = array($salon->saturday_from, $salon->saturday_to);
                    break;
            }
            $duration[0] = Carbon::createFromFormat('H:i:s', $duration[0])->format('H:i');
            $duration[1] = Carbon::createFromFormat('H:i:s', $duration[1])->format('H:i');

            $start_time = $duration[0];
            $slots = array();

            $appointments = Appointment::where('salon_id', $salon_id)
                ->where('appointment_date', $date)
                ->get(['appointments.*'])
                ->toArray();

            while (Carbon::createFromFormat('H:i', $start_time)->addMinutes($slot_duration) <= Carbon::createFromFormat('H:i', $duration[1])) {
                $end_time = Carbon::createFromFormat('H:i', $start_time)->addMinutes($slot_duration)->format('H:i');

                // Check if the slot overlaps with any existing appointments
                $overlap = false;
                foreach ($appointments as $appointment) {
                    $appointment_start = $appointment['appointment_time'];
                }

                if (!$overlap) {
                    $slots[] =  $start_time . ' to ' . $end_time;
                }

                $start_time = Carbon::createFromFormat('H:i', $start_time)->addMinutes(15)->format('H:i');
            }

            return Utils::successResponse($slots);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getAvailableSlots($salon_id, $date, $duration)
    {
        try {

            // Get the day of the week for the appointment date
            $dayName = Carbon::createFromFormat('Y-m-d', $date)->format('l'); // Full day name (e.g., Monday)
            $dayNameLowercase = strtolower($dayName) . '_from'; // Convert to lowercase

            // $firstFiveLetters = substr($dayNameLowercase, 0, 5); // Extract the first 5 letters

            $salon = Salon::where('id', $salon_id)->firstOrFail();

            //    Check if the salon is closed 
            if ($dayNameLowercase == 'sunday_from') {
                if ($salon->sunday_from == null) {
                    return response()->json(['slots' => [], 'message' => 'Salon is closed'], JsonResponse::HTTP_OK);
                }
            }
            if ($dayNameLowercase == 'monday_from') {
                if ($salon->monday_from == null) {
                    return response()->json(['slots' => [], 'message' => 'Salon is closed'], JsonResponse::HTTP_OK);
                }
            }
            if ($dayNameLowercase == 'tuesday_from') {
                if ($salon->tuesday_from == null) {
                    return response()->json(['slots' => [], 'message' => 'Salon is closed'], JsonResponse::HTTP_OK);
                }
            }
            if ($dayNameLowercase == 'wednesday_from') {
                if ($salon->wednesday_from == null) {
                    return response()->json(['slots' => [], 'message' => 'Salon is closed'], JsonResponse::HTTP_OK);
                }
            }
            if ($dayNameLowercase == 'thursday_from') {
                if ($salon->thursday_from == null) {
                    return response()->json(['slots' => [], 'message' => 'Salon is closed'], JsonResponse::HTTP_OK);
                }
            }
            if ($dayNameLowercase == 'friday_from') {
                if ($salon->friday_from == null) {
                    return response()->json(['slots' => [], 'message' => 'Salon is closed'], JsonResponse::HTTP_OK);
                }
            }
            if ($dayNameLowercase == 'saturday_from') {
                if ($salon->saturday_from == null) {
                    return response()->json(['slots' => [], 'message' => 'Salon is closed'], JsonResponse::HTTP_OK);
                }
            }

            $barbers = Barber::where('salon_id', $salon_id)->count();

            $appointments = DB::table('appointments')
                ->select('appointment_time', 'appointment_end_time', DB::raw('count(*) as total'))
                ->where('appointment_date', '=', Carbon::createFromFormat('Y-m-d', $date)->format('Y-m-d'))
                ->groupBy('appointment_date', 'appointment_end_time', 'appointment_time')->get();

            $slots = array();
            $all_slots = $this->getAllSlots($salon_id, $date, $duration)->original['data'];
            $slot_count = count($all_slots);
            $appointment_count =  count($appointments);

            for ($i = 0; $i < $slot_count; $i++) {
                $booked = false;

                for ($j = 0; $j < $appointment_count; $j++) {
                    $start_time = Carbon::createFromFormat('H:i:s', $appointments[$j]->appointment_time)->format('H:i');
                    $end_time = Carbon::createFromFormat('H:i:s', $appointments[$j]->appointment_end_time)->format('H:i');

                    if ($start_time <= $all_slots[$i] && $end_time > $all_slots[$i]) {
                        if ($appointments[$j]->total >= $barbers) {
                            $booked = true;
                            break; // No need to check further appointments for this slot
                        }
                    }
                }

                if ($booked) {
                    $slots[] = ['time' => $all_slots[$i], 'status' => 'booked'];
                } else {
                    $slots[] = ['time' => $all_slots[$i], 'status' => 'available'];
                }
            }

            return response()->json(['slots' => $slots], JsonResponse::HTTP_OK);
            // } catch (ModelNotFoundException $ex) {
            //     // Salon not found
            //     return response()->json(['error' => 'Salon not found'], JsonResponse::HTTP_NOT_FOUND);
        } catch (Exception $ex) {
            // Other exceptions
            return response()->json(['error' => $ex->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    // endregion

    // region Create Appointment
    public function createAppointment()
    {
        try {

            request()->validate([
                'salon_id' => 'required',
                'appointment_date' => 'required',
                'appointment_time' => 'required',
                'appointment_end_time' => 'required',
                'phone_number' => 'required',
                'customer_name' => 'required',
                'service_ids' => 'required'
            ]);

            $d = request('appointment_date');
            $t = request('appointment_time');
            $e = request('appointment_end_time');
            $dt = $d . ' ' . $t;

            $appointment = Appointment::create([
                'salon_id' => request('salon_id'),
                'user_id' => Auth::id(),
                'barber_id' => request('barber_id') !== null ? request('barber_id') : null,
                'appointment_date' => $d,
                'appointment_time' => $t,
                'appointment_end_time' => $e,
                'duration' => request('duration'),
                'appointment_datetime' => $dt,
                'fulfilled' => -1,
                'phone_number' => request('phone_number'),
                'customer_name' => request('customer_name'),
                'booking_status' => -1

            ]);

            $appointment_id = $appointment->id;

            $service_ids = request('service_ids');
            foreach ($service_ids as $service_id) {
                AppointmentService::create([
                    'appointment_id' => $appointment_id,
                    'service_id' => $service_id,
                ]);
            }

            $appointment = Appointment::where('id', $appointment_id)->firstOrFail();
            $appointment->append('appointment_services');
            return Utils::successResponse($appointment);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    // endregion

    // region Appointment Details
    public function getAppointmentFull($id)
    {
        try {
            $appointment = Appointment::where('id', $id)->firstOrFail();
            $appointment->append('appointment_services');

            return Utils::successResponse($appointment);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function deleteAppointment(Appointment $appointment)
    {
        try {
            AppointmentService::where('appointment_id', $appointment->id)->delete();
            return Utils::successResponse($appointment->delete());
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function cancelAppointmentByUser(Appointment $appointment)
    {
        try {
            request()->validate([]);

            $result = $appointment->update([
                // 'fulfilled' => "0",
                'booking_status' => 0, // Update booking_status to 0
                'reason_for_absence' => request('reason_for_absence')
            ]);

            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    // endregion


    // region Profile page
    public function updatePersonalDetails(User $user)
    {
        try {
            Utils::isUserAuthorized($user->id);

            request()->validate([
                'email' => 'required',
                'phone' => 'required',
                'gender' => ['required', 'regex:/^.*(male|Male|female|Female).*$/']
            ]);

            $result = $user->update([
                'email' => request('email'),
                'name' => request('name'),
                'phone' => request('phone'),
                'profile_pic_url' => request('profile_pic_url'),
                'gender' => strtolower(request('gender')),
                'referral_code' => request('referral_code'),
                'latitude' => request('latitude'),
                'longitude' => request('longitude'),
                'social_media_login_provider' => request('social_media_login_provider'),
                'social_media_token' => request('social_media_token'),
                'language' => request('language', 'en'),
                'status' => request('status'),
                'notifications' => request('notifications', true)
            ]);

            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    // endregion

    // region Salon Reviews page
    public function getSalonReviews(Salon $salon)
    {
        try {
            $reviews = $salon->reviews->sortByDesc('updated_at');
            $reviews->each->append('user');

            return Utils::successResponse($reviews);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function createSalonReview()
    {
        try {
            Utils::isUserAuthorized(request('by_user_id'));

            request()->validate([
                'salon_id' => 'required',
                'by_user_id' => 'required',
                'appointment_id' => 'required',
                'rating' => 'required|integer|numeric|min:1|max:5',
                'review' => 'required'
            ]);

            $result = SalonReview::create([
                'salon_id' => request('salon_id'),
                'by_user_id' => request('by_user_id'),
                'appointment_id' => request('appointment_id'),
                'rating' => request('rating'),
                'review' => request('review')
            ]);

            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function updateSalonReview(SalonReview $salon_review)
    {
        try {
            Utils::isUserAuthorized($salon_review->by_user_id);

            request()->validate([
                'rating' => 'required|integer|numeric|min:1|max:5',
                'review' => 'required'
            ]);

            $result = $salon_review->update([
                'rating' => request('rating'),
                'review' => request('review')
            ]);

            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function deleteSalonReview(SalonReview $salon_review)
    {
        try {
            Utils::isUserAuthorized($salon_review->by_user_id);

            return Utils::successResponse($salon_review->delete());
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    // endregion

    // region Salon Photos page
    public function getSalonMedia(Salon $salon)
    {
        try {


            $response = [];
            $response['photos'] = $salon->photos; //->sortByDesc('updated_at');
            $response['videos'] = $salon->videos; //->sortByDesc('updated_at');

            // return $response;

            // $media = [
            //     'photos' => $salon->photos->sortByDesc('updated_at'),
            //     'videos' => $salon->videos->sortByDesc('updated_at')
            // ];

            return Utils::successResponse($response);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    // endregion
}
