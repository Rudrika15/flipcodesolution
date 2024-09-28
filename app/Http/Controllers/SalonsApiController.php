<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use App\Models\Appointment;
use App\Models\Customer;
use App\Models\Gallery;
use App\Models\Salon;
use App\Models\SalonAmenity;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\User;
use Carbon\Carbon;
use Cassandra\Custom;
use Exception;
use Hamcrest\Util;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ItemNotFoundException;
use Illuminate\Validation\UnauthorizedException;

class SalonsApiController extends Controller
{
    // region HOME PAGE
    public function getUpcomingAppointments(Salon $salon)
    {
        try {
            Utils::isUserAuthorized($salon->partner_id);

            $appointments = $salon->appointments;
            foreach ($appointments as $appointment) {
                $appointment->append('user');
                $appointment->append('appointment_services');
            }
            return Utils::successResponse($appointments);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }


    public function getUpcomingAppointmentDetails(Salon $salon, Appointment $appointment)
    {
        try {
            Utils::isUserAuthorized($salon->partner_id);

            if ($appointment->salon_id != $salon->id) {
                throw new UnauthorizedException(config('constants.status.unauthorized'));
            }
            return Utils::successResponse($appointment->append('user')->append('appointment_services'));
        } catch (UnauthorizedException $ex) {
            return Utils::unauthorizedResponse($ex);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getCustomerFull(Salon $salon, $customer_id)
    {
        try {
            Utils::isUserAuthorized($salon->partner_id);

            $upcomingAppointments = Appointment::where([
                ['salon_id', $salon->id],
                ['user_id', $customer_id],
                ['appointment_date', '>=', Carbon::today()]
            ])->get()->sortByDesc('appointment_date');

            if ($upcomingAppointments == null) {
                throw new ItemNotFoundException(config('constants.status.not_found'));
            } else {
                foreach ($upcomingAppointments as $upcomingAppointment) {
                    $upcomingAppointment->append('appointment_services');
                }
            }

            $customer = User::with(['reviews' => function ($query) use ($salon) {
                $query->where('salon_id', $salon->id);
            }])->where('id', $customer_id)->firstOrFail();

            $pastAppointments = Appointment::where([
                ['salon_id', '=', $salon->id],
                ['user_id', '=', $customer_id],
                ['appointment_date', '<', Carbon::today()]
            ])->get()->sortByDesc('appointment_date');

            foreach ($pastAppointments as $pastAppointment) {
                $pastAppointment->append('appointment_services');
            }

            $result = [
                'customer' => $customer,
                'upcomingAppointments' => $upcomingAppointments,
                'pastAppointments' => $pastAppointments
            ];

            return Utils::successResponse($result);
        } catch (ItemNotFoundException $ex) {
            return Utils::notFoundResponse($ex);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    // endregion


    // region Profile page
    public function getSalonProfile(Salon $salon)
    {
        try {
            Utils::isUserAuthorized($salon->partner_id);

            return Utils::successResponse($salon);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function updateSalonProfile(Salon $salon)
    {
        try {
            Utils::isUserAuthorized($salon->partner_id);

            request()->validate([]);

            $result = $salon->update([
                'salon_name' => request('salon_name'),
                'salon_legal_name' => request('salon_legal_name'),
                'address' => request('address'),
                'area' => request('area'),
                'city' => request('city'),
                'state' => request('state'),
                'country' => request('country'),
                'postcode' => request('postcode'),
                'phone_number' => request('phone_number'),
                'salon_type_id' => request('salon_type_id'),
                'latitude' => request('latitude'),
                'longitude' => request('longitude'),
                'website' => request('website'),
                'twitter' => request('twitter'),
                'facebook' => request('facebook'),
                'instagram' => request('instagram'),
                'pinterest' => request('pinterest'),
                'show_barber_details' => request('show_barber_details'),
                'sunday_from' => request('sunday_from'),
                'sunday_to' => request('sunday_to'),
                'monday_from' => request('monday_from'),
                'monday_to' => request('monday_to'),
                'tuesday_from' => request('tuesday_from'),
                'tuesday_to' => request('tuesday_to'),
                'wednesday_from' => request('wednesday_from'),
                'wednesday_to' => request('wednesday_to'),
                'thursday_from' => request('thursday_from'),
                'thursday_to' => request('thursday_to'),
                'friday_from' => request('friday_from'),
                'friday_to' => request('friday_to'),
                'saturday_from' => request('saturday_from'),
                'saturday_to' => request('saturday_to')
            ]);

            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function updateSalonProfileLogo(Salon $salon)
    {
        try {
            Utils::isUserAuthorized($salon->partner_id);

            request()->validate([
                'logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
            ]);

            $imageName = time() . '.' . request('logo')->getClientOriginalExtension();

            request('logo')->move(public_path('/logo'), $imageName);

            $result = $salon->update([
                'shop_profile_pic_url' => "logo/" . $imageName
            ]);

            return Utils::successResponse($result);
        } catch (UnauthorizedException $ex) {
            return Utils::unauthorizedResponse($ex);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    // endregion

    // region Services page
    public function getServices(Salon $salon)
    {
        try {
            Utils::isUserAuthorized($salon->partner_id);

            return Utils::successResponse($salon->services);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getServicesSalon(Salon $salon)
    {
        try {
            // Utils::isUserAuthorized($salon->partner_id);
            // return Utils::successResponse($salon->services);
            return Utils::successResponse($salon->services);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }

        // try {
        //     $services = $salon->services;
        //     return Utils::successResponse([
        //         'count' => count($services),
        //         'data' => $services,
        //     ]);
        // } catch (Exception $ex) {
        //     return Utils::generalErrorResponse($ex);
        // }

    }

    public function getServicesBySalonAndType($salonId, $serviceTypeId)
    {
        // try {
        //     Utils::isUserAuthorized($salonId); // Assuming the salon ID is used for authorization.

        //     $services = Service::where('salon_id', $salonId)
        //         ->where('service_type_id', $serviceTypeId)
        //         ->get();

        //     return Utils::successResponse($services);
        // } catch (Exception $ex) {
        //     return Utils::generalErrorResponse($ex);
        // }

        try {
            $services = Service::where('salon_id', $salonId)
                ->where('service_type_id', $serviceTypeId)
                ->get();

            return Utils::successResponse($services);
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function createService(Salon $salon)
    {
        try {
            Utils::isUserAuthorized($salon->partner_id);

            request()->validate([
                'service_type_id' => 'required',
                'service_name' => 'required',
                'amount' => 'required|numeric',
                'duration' => 'required|integer|numeric|min:15',
                'gender' => 'required'
            ]);

            return Utils::successResponse(Service::create([
                'salon_id' => $salon->id,
                'service_type_id' => request('service_type_id'),
                'service_name' => request('service_name'),
                'amount' => request('amount'),
                'duration' => request('duration'),
                'gender' => request('gender')
            ]));
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function updateService(Salon $salon, Service $service)
    {
        try {
            Utils::isUserAuthorized($salon->partner_id);

            if ($salon->id != $service->salon_id) {
                throw new UnauthorizedException(config('constants.status.unauthorized'));
            }

            request()->validate([
                'service_type_id' => 'required',
                'service_name' => 'required',
                'amount' => 'required|numeric',
                'duration' => 'required|integer|numeric|min:15',
                'gender' => 'required'
            ]);


            return Utils::successResponse($service->update([
                'service_type_id' => request('service_type_id'),
                'service_name' => request('service_name'),
                'amount' => request('amount'),
                'duration' => request('duration'),
                'gender' => request('gender')
            ]));
        } catch (UnauthorizedException $ex) {
            return Utils::unauthorizedResponse($ex);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function deleteService(Salon $salon, Service $service)
    {
        try {
            Utils::isUserAuthorized($salon->partner_id);

            if ($salon->id != $service->salon_id) {
                throw new UnauthorizedException(config('constants.status.unauthorized'));
            }

            return Utils::successResponse($service->delete());
        } catch (UnauthorizedException $ex) {
            return Utils::unauthorizedResponse($ex);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    // endregion

    // region Gallery
    public function getGallery(Salon $salon)
    {
        try {
            Utils::isUserAuthorized($salon->partner_id);

            // $media = [
            //     'photos' => $salon->photos->sortByDesc('updated_at'),
            //     'videos' => $salon->videos->sortByDesc('updated_at')
            // ];

            // return Utils::createSuccessResponse($media);

            $response = [];
            $response['photos'] = $salon->photos; //->sortByDesc('id');
            $response['videos'] = $salon->videos; //->sortByDesc('updated_at');

            return Utils::successResponse($response);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function createGallery(Salon $salon)
    {
        try {
            Utils::isUserAuthorized($salon->partner_id);


            // request()->validate([
            //     'url' => 'required',
            //     'media_type' => 'required'
            // ]);


            // $gallery = Gallery::create([
            //     'salon_id' => $salon->id,
            //     'url' => request('url'),
            //     'media_type' => request('media_type')
            // ]);


            request()->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);

            //  $name = $request->file('image')->getClientOriginalName();
            //  $extension = $request->file('image')->getClientOriginalExtension();

            // $path = $request->file('image')->store('public/images');

            $imageName = time() . '.' . request("image")->getClientOriginalExtension();

            request("image")->move(public_path('/images'), $imageName);

            $gallery = Gallery::create([
                'salon_id' => $salon->id,
                'url' => "images/" . $imageName,
                'media_type' => "image"
            ]);
            return Utils::successResponse($gallery);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function updateGallery(Salon $salon, Gallery $gallery)
    {
        try {
            Utils::isUserAuthorized($salon->partner_id);

            if ($salon->id != $gallery->salon_id) {
                throw new UnauthorizedException(config('constants.status.unauthorized'));
            }

            request()->validate([
                'url' => 'required',
                'media_type' => 'required'
            ]);

            return Utils::successResponse($gallery->update([
                'url' => request('url'),
                'media_type' => request('media_type')
            ]));
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function deleteGallery(Salon $salon, Gallery $gallery)
    {
        try {
            Utils::isUserAuthorized($salon->partner_id);

            if ($salon->id != $gallery->salon_id) {
                throw new UnauthorizedException(config('constants.status.unauthorized'));
            }
            return Utils::successResponse($gallery->delete());
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    // endregion

    //Get Appointment By Month
    public function getUsersByMonth(Salon $salon, $month)
    {
        try {
            // Utils::isUserAuthorized($salon->partner_id);

            $appointments = Appointment::where('salon_id', $salon->id)->whereMonth('appointment_date', $month)
                ->pluck('appointment_date', null)
                ->toArray();

            return Utils::successResponse($appointments);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    //Count Appointmnet By Date
    public function countAppoinmentByDate(Salon $salon, $date)
    {
        try {
            Utils::isUserAuthorized($salon->partner_id);

            $appointments = Appointment::where('salon_id', $salon->id)
                ->whereDate('appointment_date', $date)->count();

            return Utils::successResponse($appointments);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    //Cancel Appointmnet By Salon
    public function cancelAppointmentBySalon(Salon $salon, Appointment $appointment)
    {
        try {
            // Utils::isUserAuthorized($salon->partner_id);
            request()->validate([]);
            $result = $appointment->update([
                // 'fulfilled' => "1",
                'booking_status' => 1,
                'reason_for_absence' => request('reason_for_absence')
            ]);
            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    public function getAppointmentsByDates(Salon $salon, $date)
    {
        try {
            // Utils::isUserAuthorized($salon->partner_id);
            // return "hi";
            $appointments = Appointment::where('salon_id', $salon->id)->whereDate('appointment_date', $date)->get();
            foreach ($appointments as $pastAppointment) {
                $pastAppointment->append('appointment_services');
            }
            return Utils::successResponse($appointments);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function store(SalonAmenity $salonAmenity)
    {
        request()->validate([
            'salon_id' => 'required',
            'amenity_id' => 'required|array'
        ]);

        $salonId = request('salon_id');
        $amenityIds = request('amenity_id');

        // Get existing records from the database
        $existingSalonAmenities = SalonAmenity::where('salon_id', $salonId)->get();

        foreach ($amenityIds as $amenityId) {
            $existingRecord = $existingSalonAmenities->where('amenity_id', $amenityId)->first();

            if ($existingRecord) {
                // Update the existing record
                $existingRecord->update([
                    'salon_id' => $salonId,
                    'amenity_id' => $amenityId
                ]);
            } else {
                // Create a new record
                SalonAmenity::create([
                    'salon_id' => $salonId,
                    'amenity_id' => $amenityId
                ]);
            }
        }

        // Delete records that are not in the incoming data
        $existingSalonAmenities->whereNotIn('amenity_id', $amenityIds)->each(function ($record) {
            $record->delete();
        });

        return ["success" => "Salon amenities created or updated successfully"];
    }
}
