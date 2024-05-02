<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use App\Http\Resources\BusinessResource;
use App\Http\Resources\BusinessResourceCollection;
use App\Models\Salon;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ItemNotFoundException;
use Illuminate\Validation\UnauthorizedException;
use Throwable;

class BusinessApiController extends Controller
{

    //region USER APIs
    /** GET method
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        try {
            if (!isset($id)) {
                $results = Salon::all();
            } else {
                $results = Salon::where('id', $id)->first();
            }
            return Utils::successResponse($results);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function indexByTypeByUser($type)
    {
        try {
            $results = Salon::where('salon_type', $type)->get();
            return Utils::successResponse($results);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    //endregion

    //region ADMIN APIs
    //TODO: Refactor this section
    public function byPartner($partner_id)
    {
        return Salon::where('partner_id', $partner_id)->get();
    }
    //
    //    // POST methods
    public function store()
    {
        try {
            request()->validate([
                'salon_name' => 'required',
                'salon_legal_name' => 'required',
                'phone_number' => 'required',
                'salon_type_id' => 'required',
                'partner_id' => 'required'
            ]);

            $results =  $this->createBusinessData(request());
            return Utils::successResponse($results);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    //
    //    // PUT methods
    public function update(Salon $business)
    {
        try {
            request()->validate([
                'salon_name' => 'required',
                'salon_legal_name' => 'required',
                'phone_number' => 'required',
                'salon_type_id' => 'required',
            ]);

            $result = $this->updateBusinessData($business);
            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }

        //    return ["success" => $result];
    }
    //
    //DELETE methods
    public function delete(Salon $business)
    {
        // return $business;
        try {
            $result = $business->delete();

            return Utils::successResponse($result);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    //endregion

    //region PARTNER APIs
    public function businessDetailsByPartner($partner_id)
    {
        try {
            // $partner_id;
            Utils::isUserAuthorized($partner_id);
            // return 'ji';

            return Utils::successResponse(
                new BusinessResource(
                    Salon::where('partner_id', $partner_id)->firstOrFail()
                )
            );
        } catch (ModelNotFoundException $ex) {
            return response([
                'success' => false,
                'data' => $ex->getMessage()
            ], 404);
        } catch (UnauthorizedException $ex) {
            return Utils::unauthorizedResponse($ex);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function storeBusinessDetailsByPartner($partner_id, Salon $business)
    {
        try {
            request()->validate([
                'partner_id' => 'required',
                'business_name' => 'required|string',
                'business_legal_name' => 'required|string',
                'phone_number' => 'required',
                'salon_type' => 'required',
            ]);
            Utils::isUserAuthorized($partner_id);
            
            $resource = new BusinessResource(request()->getContent());
            // return 'hi';

            if (!Salon::where('partner_id', $partner_id)->first()) {
                $resource->partner_id = $partner_id;    // ensuring that no malicious attempt made to pass different id
                return Utils::successResponse($this->createBusinessData($resource));
            }
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function updateBusinessDetailsByPartner($partner_id, Salon $business)
    {
        try {
            request()->validate([
                'business_name' => 'required|string',
                'business_legal_name' => 'required|string',
                'phone_number' => 'required',
                'salon_type' => 'required',
            ]);

            Utils::isUserAuthorized($partner_id);

            if (!Salon::where([
                ['id', '=', $business->id],
                ['partner_id', '=', $partner_id]
            ])->first()) {
                return Utils::notFoundResponse();
            }

            return Utils::successResponse($this->updateBusinessData($business));
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    //endregion

    //region ADMIN APIs
    //TODO: Admin APIs
    //endregion

    //region PRIVATE FUNCTIONS

    private function createBusinessData($requestData)
    {
        return Salon::create([
            'salon_name' => $requestData->input('salon_name'),
            'shop_profile_pic_url' => $requestData->input('shop_profile_pic_url'),
            'salon_legal_name' => $requestData->input('salon_legal_name'),
            'address' => $requestData->input('address'),
            'latitude' => $requestData->input('latitude'),
            'longitude' => $requestData->input('longitude'),
            'phone_number' => $requestData->input('phone_number'),
            'salon_type_id' => $requestData->input('salon_type_id'),
            'website' => $requestData->input('website'),
            'twitter' => $requestData->input('twitter'),
            'facebook' => $requestData->input('facebook'),
            'instagram' => $requestData->input('instagram'),
            'pinterest' => $requestData->input('pinterest'),
            'show_barber_details' => $requestData->input('show_barber_details'),
            'partner_id' => $requestData->input('partner_id'),
            'sunday_from' => Utils::getTimeOrNull($requestData->input('sunday_from')),
            'sunday_to' => Utils::getTimeOrNull($requestData->input('sunday_to')),
            'monday_from' => Utils::getTimeOrNull($requestData->input('monday_from')),
            'monday_to' => Utils::getTimeOrNull($requestData->input('monday_to')),
            'tuesday_from' => Utils::getTimeOrNull($requestData->input('tuesday_from')),
            'tuesday_to' => Utils::getTimeOrNull($requestData->input('tuesday_to')),
            'wednesday_from' => Utils::getTimeOrNull($requestData->input('wednesday_from')),
            'wednesday_to' => Utils::getTimeOrNull($requestData->input('wednesday_to')),
            'thursday_from' => Utils::getTimeOrNull($requestData->input('thursday_from')),
            'thursday_to' => Utils::getTimeOrNull($requestData->input('thursday_to')),
            'friday_from' => Utils::getTimeOrNull($requestData->input('friday_from')),
            'friday_to' => Utils::getTimeOrNull($requestData->input('friday_to')),
            'saturday_from' => Utils::getTimeOrNull($requestData->input('saturday_from')),
            'saturday_to' => Utils::getTimeOrNull($requestData->input('saturday_to'))
        ]);
    }

    // private function createBusinessData(BusinessResource $data)
    // {
    //     return Salon::create([
    //         'business_name' => request('business_name'),
    //         'shop_profile_pic_url' => request('shop_profile_pic_url'),
    //         'business_legal_name' => request('business_legal_name'),
    //         'address' => request('address'),
    //         'latitude' => request('latitude'),
    //         'longitude' => request('longitude'),
    //         'phone_number' => request('phone_number'),
    //         'salon_type' => request('salon_type'),
    //         'website' => request('website'),
    //         'twitter' => request('twitter'),
    //         'facebook' => request('facebook'),
    //         'instagram' => request('instagram'),
    //         'pinterest' => request('pinterest'),
    //         'show_barber_details' => request('show_barber_details'),
    //         'partner_id' => request('partner_id'),
    //         'sunday_from' => Utils::getTimeOrNull(request('sunday_from')),
    //         'sunday_to' => Utils::getTimeOrNull(request('sunday_to')),
    //         'monday_from' => Utils::getTimeOrNull(request('monday_from')),
    //         'monday_to' => Utils::getTimeOrNull(request('monday_to')),
    //         'tuesday_from' => Utils::getTimeOrNull(request('tuesday_from')),
    //         'tuesday_to' => Utils::getTimeOrNull(request('tuesday_to')),
    //         'wednesday_from' => Utils::getTimeOrNull(request('wednesday_from')),
    //         'wednesday_to' => Utils::getTimeOrNull(request('wednesday_to')),
    //         'thursday_from' => Utils::getTimeOrNull(request('thursday_from')),
    //         'thursday_to' => Utils::getTimeOrNull(request('thursday_to')),
    //         'friday_from' => Utils::getTimeOrNull(request('friday_from')),
    //         'friday_to' => Utils::getTimeOrNull(request('friday_to')),
    //         'saturday_from' => Utils::getTimeOrNull(request('saturday_from')),
    //         'saturday_to' => Utils::getTimeOrNull(request('saturday_to'))
    //     ]);
    // }

    private function updateBusinessData(Salon $business): bool
    {
        return $business->update([
            'salon_name' => request('business_name'),
            'shop_profile_pic_url' => request('shop_profile_pic_url'),
            'salon_legal_name' => request('business_legal_name'),
            'address' => request('address'),
            'latitude' => request('latitude'),
            'longitude' => request('longitude'),
            'phone_number' => request('phone_number'),
            'salon_type_id' => request('salon_type'),
            'website' => request('website'),
            'twitter' => request('twitter'),
            'facebook' => request('facebook'),
            'instagram' => request('instagram'),
            'pinterest' => request('pinterest'),
            'show_barber_details' => request('show_barber_details'),
            'sunday_from' => Utils::getTimeOrNull(request('sunday_from')),
            'sunday_to' => Utils::getTimeOrNull(request('sunday_to')),
            'monday_from' => Utils::getTimeOrNull(request('monday_from')),
            'monday_to' => Utils::getTimeOrNull(request('monday_to')),
            'tuesday_from' => Utils::getTimeOrNull(request('tuesday_from')),
            'tuesday_to' => Utils::getTimeOrNull(request('tuesday_to')),
            'wednesday_from' => Utils::getTimeOrNull(request('wednesday_from')),
            'wednesday_to' => Utils::getTimeOrNull(request('wednesday_to')),
            'thursday_from' => Utils::getTimeOrNull(request('thursday_from')),
            'thursday_to' => Utils::getTimeOrNull(request('thursday_to')),
            'friday_from' => Utils::getTimeOrNull(request('friday_from')),
            'friday_to' => Utils::getTimeOrNull(request('friday_to')),
            'saturday_from' => Utils::getTimeOrNull(request('saturday_from')),
            'saturday_to' => Utils::getTimeOrNull(request('saturday_to'))
        ]);
    }
    //endregion
}
