<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use App\Models\Barber;
use App\Models\Salon;
use Exception;
use Hamcrest\Util;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\UnauthorizedException;

/**
 */
class BarberApiController extends Controller
{

    // region USER APIs
    public function indexByUser($business_id)
    {
        try {
            $business = Salon::where('id', $business_id)->firstOrFail();

            $data = $business->show_barber_details ? Barber::where('salon_id', $business_id)->get() : [];
            return Utils::successResponse($data);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    // endregion
    // region ADMIN APIs
    public function index($id = null)
    {
        try {
            if (!isset($id)) {
                $results = Barber::all();
            } else {
                $results = Barber::where('id', $id)->first();
            }
            return Utils::successResponse($results);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
        return $results;
    }

    public function byBusiness(Salon $business)
    {
        return Barber::where('business_id', $business->id)->get();
    }

    // POST method

    public function store(Barber $barber)
    {
        request()->validate([
            'business_id' => 'required',
            'barber_name' => 'required',
            'available' => 'required'
        ]);

        return Barber::create([
            'business_id' => request('business_id'),
            'barber_name' => request('barber_name'),
            'available' => request('available')
        ]);
    }

    // PUT method

    public function update(Barber $barber)
    {
        request()->validate([
            'barber_name' => 'required',
            'available' => 'required'
        ]);

        $result = $barber->update([
            'barber_name' => request('barber_name'),
            'available' => request('available')
        ]);

        return ["success" => $result];
    }

    // DELETE method

    public function delete(Barber $barber)
    {
        $result = $barber->delete();

        return ["success" => $result];
    }
    // endregion

    //region PARTNER APIs

    public function indexByBusinessByPartner($partner_id, $business_id, $id = null)
    {
        try {
            Utils::isUserAuthorized($partner_id);

            $business = Salon::where(['id' => $business_id, 'partner_id' => $partner_id])->firstOrFail();

            if (isset($id)) {
                return Utils::successResponse(
                    Barber::where([
                        'id' => $id,
                        'salon_id' => $business->id
                    ])->firstOrFail()
                );
            } else {
                return Utils::successResponse(
                    Barber::where(['salon_id' => $business->id])->get()
                );
            }
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (UnauthorizedException $ex) {
            return Utils::unauthorizedResponse($ex);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function storeByBusinessByPartner($partner_id, $business_id, Barber $barber)
    {
        try {
            request()->validate([
                'barber_name' => 'required',
                'available' => 'required'
            ]);

            Utils::isUserAuthorized($partner_id);

            $business = Salon::where(['id' => $business_id, 'partner_id' => $partner_id])->firstOrFail();

            return Utils::successResponse(
                Barber::create([
                    'salon_id' => $business->id,
                    'barber_name' => request('barber_name'),
                    'available' => request('available')
                ])
            );
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (UnauthorizedException $ex) {
            return Utils::unauthorizedResponse($ex);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function updateByBusinessByPartner($partner_id, $business_id, Barber $barber)
    {
        try {
            request()->validate([
                'barber_name' => 'required',
                'available' => 'required'
            ]);

            Utils::isUserAuthorized($partner_id);

            $business = Salon::where(['id' => $business_id, 'partner_id' => $partner_id])->firstOrFail();

            // Find if barber belongs to the correct business
            // $barber_old = Barber::where(['id' => $barber->id, 'business_id' => $business->id])->firstOrFail();

            $barber->update([
                'barber_name' => request('barber_name'),
                'available' => request('available')
            ]);
            return Utils::successResponse($barber);
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (UnauthorizedException $ex) {
            return Utils::unauthorizedResponse($ex);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function deleteByBusinessByPartner($partner_id, $business_id, Barber $barber)
    {
        try {
            Utils::isUserAuthorized($partner_id);

            $business = Salon::where(['id' => $business_id, 'partner_id' => $partner_id])->firstOrFail();

            // Find if barber belongs to the correct business
            $barber_old = Barber::where(['id' => $barber->id, 'salon_id' => $business->id])->firstOrFail();

            $barber->delete();
            return Utils::successResponse();
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (UnauthorizedException $ex) {
            return Utils::unauthorizedResponse($ex);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    //endregion
}
