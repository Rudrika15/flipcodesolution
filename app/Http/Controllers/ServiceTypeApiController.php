<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use App\Models\ServiceType;
use App\Models\User;

class ServiceTypeApiController extends Controller
{
    // GET methods
    public function index($id = null)
    {
        if (!isset($id)) {
            $results = ServiceType::all();
        } else {
            $results = ServiceType::where('id', $id)->first();
        }

        return $results;
    }

    public function byServiceCategory(ServiceCategory $serviceCategory)
    {
        try {
            $ServiceType = ServiceType::where('service_category_id', $serviceCategory->id)->get();
            return response()->json([
                'status' => true,
                'data' => $ServiceType,
                'message' => 'ServiceCategory successfully'
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    // POST methods
    public function store(ServiceType $serviceType)
    {
        request()->validate([
            'service_type' => 'required',
            'icon_url' => 'required',
            'service_category_id' => 'required'
        ]);

        return ServiceType::create([
            'service_type' => request('service_type'),
            'icon_url' => request('icon_url'),
            'service_category_id' => request('service_category_id')
        ]);
    }

    // PUT method
    public function update(ServiceType $serviceType)
    {
        request()->validate([
            'service_type' => 'required',
            'icon_url' => 'required'
        ]);

        $result = $serviceType->update([
            'service_type' => request('service_type'),
            'icon_url' => request('icon_url')
        ]);
        return ["success" => $result];
    }

    // DELETE method
    public function delete(ServiceType $serviceType)
    {
        $result = $serviceType->delete();

        return ["success" => $result];
    }
}
