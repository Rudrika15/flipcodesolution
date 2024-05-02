<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use App\Models\ServiceCategory;
use Exception;
use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\ServiceType;
use App\Models\Salon;

class ServiceApiController extends Controller
{
    // GET methods
    public function index($id = null)
    {
        if (!isset($id)) {
            $results = Service::all();
        } else {
            $results = Service::where('id', $id)->first();
        }
        return $results;
    }

    public function byServiceType(ServiceType $serviceType)
    {
        $results = Service::where('service_type_id', $serviceType->id)->get();
        return $results;
    }

    public function byBusiness(Salon $business)
    {
        $results = Service::where('business_id', $business->id)->get();
        return $results;
    }

    public function byBusinessByServiceType(Salon $business, ServiceType $serviceType)
    {
        $criteria = [
            'business_id' => $business->id,
            'service_type_id' => $serviceType->id
        ];

        $results = Service::where($criteria)->get();
        return $results;
    }

    // POST methods
    public function store(Service $service)
    {
        request()->validate([
            'business_id' => 'required',
            'service_type_id' => 'required',
            'service_name' => 'required',
            'duration_in_mins' => 'required',
            'amount' => 'required'
        ]);

        return Service::create([
            'business_id' => request('business_id'),
            'service_type_id' => request('service_type_id'),
            'service_name' => request('service_name'),
            'duration_in_mins' => request('duration_in_mins'),
            'amount' => request('amount')
        ]);
    }

    // PUT
    public function update(Service $service)
    {
        request()->validate([
            'service_name' => 'required',
            'duration_in_mins' => 'required',
            'amount' => 'required'
        ]);

        $result = $service->update([
            'service_name' => request('service_name'),
            'duration_in_mins' => request('duration_in_mins'),
            'amount' => request('amount')
        ]);

        return ["success" => $result];
    }

    // DELETE method
    public function delete(Service $service)
    {
        $result = $service->delete();

        return ["success" => $result];
    }

    // region USER APIs
    // GET method
    public function getServicesForUserByBusiness($business_id)
    {
        try {
            // $services = ServiceCategory::with(['serviceTypes.services' => function ($q) use ($business_id) {
            //     $q->where('business_id', $business_id);
            // }])->get();
            $services = ServiceCategory::join('service_types','service_types.service_category_id','=','service_categories.id')
            ->join('services','services.service_type_id','=','service_types.id')
            ->where('services.salon_id', $business_id)
            ->get();

            return Utils::successResponse($services);
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getServiceCategoriesForUser()
    {
        try {
            return Utils::successResponse(ServiceCategory::all());
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }

    public function getServiceTypesForUser()
    {
        try {
            return Utils::successResponse(ServiceType::all());
        } catch (Exception $ex) {
            return Utils::generalErrorResponse($ex);
        }
    }
    // endregion

}