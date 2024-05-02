<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use App\Models\Platform;
use App\Models\Salon;
use App\Models\SalonType;
use App\Models\ServiceCategory;
use App\Models\ServiceType;
use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class OpenController extends Controller
{
    private function validateRequest()
    {
        $requestToken = request()->header('X-Platform-Token');

        $platform = Platform::where('token', $requestToken)->first();

        if ($platform == null) {
            throw new Exception('Invalid token.');
        }

        return true;
    }
    // region Service Categories
    public function getServiceCategories(int $id = null)
    {

        // try {
        //     $this->validateRequest();

        //     if ($id === null) {
        //         $result = ServiceCategory::all();
        //     } else {
        //         $result = ServiceCategory::findOrFail($id);
        //     }

        //     return Utils::successResponse($result);
        // } catch (ModelNotFoundException $ex) {
        //     return Utils::notFoundResponse();
        // } catch (Exception $ex) {
        //     return Utils::generalErrorResponse($ex);
        // }


        try {
            if ($id == null) {
                $result = ServiceCategory::all();
            } else {
                $result = ServiceCategory::where('id', $id)->firstOrFail();
            }
            return Utils::successResponse($result);
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    // endregion

    // getSalonServiceCategories 
    public function getSalonServiceCategories(int $salon_id = null)
    {


        try {
            if ($salon_id == null) {
                $result = ServiceCategory::all();
            } else {
                $result = Salon::join('salon_service_categories', 'salon_service_categories.salon_id', '=', 'salons.id')
                    ->join('service_categories', 'service_categories.id', '=', 'salon_service_categories.service_category_id')
                    ->where('salon_id', $salon_id)
                    ->get();
                // $result = ServiceCategory::where('id', $salon_id)->firstOrFail();
            }
            return Utils::successResponse($result);
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }


    // region Service Types
    public function getServiceTypes($id = null)
    {
        try {
            $this->validateRequest();

            if ($id == null) {
                $result = ServiceType::all();
            } else {
                $result = ServiceType::where('id', $id)->firstOrFail();
            }
            return Utils::successResponse($result);
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    // endregion

    // region Salons by City
    public function getSalonsByCity($city)
    {
        try {
            $this->validateRequest();

            $result = Salon::where('city', $city)->get();
            return Utils::successResponse($result);
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    // endregion

    // region Full Salon details
    public function getSalonFull(int $salon_id = null)
    {
        try {
            $this->validateRequest();

            if ($salon_id == null) {
                $salons = Salon::all();
                foreach ($salons as $salon) {
                    $salon->append('services');
                    $salon->append('ratings');
                    $salon->append('reviews');
                    $salon->append('photos');
                    $salon->append('videos');
                }

                return Utils::successResponse($salons);
            } else {
                $salon = Salon::where('id', $salon_id)->firstOrFail();
                $salon->append('services');
                $salon->append('ratings');
                $salon->append('reviews');
                $salon->append('photos');
                $salon->append('videos');

                return Utils::successResponse($salon);
            }
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    //endregion

    // region Search Panel master lists
    public function getSalonTypes()
    {
        try {
            $this->validateRequest();

            $results = SalonType::all();

            return Utils::successResponse($results);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getCities()
    {
        try {
            $this->validateRequest();
            $results = Salon::all(['id', 'city']);

            return Utils::successResponse($results);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getSalonsListByFilter()
    {
        try {
            $pLocality = request('locality');
            $pGender = request('gender');

            $results = array();

            $salonTypeIds = SalonType::whereIn('salon_type', $pGender)->pluck('id')->toArray();

            if (!empty($pLocality)) {
                $results = Salon::whereIn('city', $pLocality)->get();
            }

            if (!empty($salonTypeIds)) {
                $results = Salon::whereIn('city', $pLocality)->orWhereIn('salon_type_id', $salonTypeIds)->get();
            }
            return Utils::successResponse($results);
        } catch (ModelNotFoundException) {
            return Utils::notFoundResponse();
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    // endregion


}   // controller
