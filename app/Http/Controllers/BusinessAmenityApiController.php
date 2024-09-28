<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SalonAmenity;
use App\Models\Salon;

class BusinessAmenityApiController extends Controller
{
    // GET methods
    public function index($id = null)
    {

        try {
            if (!isset($id)) {
                $results = SalonAmenity::all();
            } else {
                $results = SalonAmenity::where('id', $id)->first();
            }
            return response()->json([
                'status' => true,
                'data' => $results,
                'message' => 'Business Amenities successfully'
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function byBusiness(Salon $business)
    {
        return SalonAmenity::where('salon_id', $business->id)->get();
    }

    public function store(SalonAmenity $businessAmenity)
    {
        request()->validate([
            'salon_id' => 'required',
            'amenity_id' => 'required|array'
        ]);
        $salonId = request('salon_id');
        $amenityIds = request('amenity_id');

        foreach ($amenityIds as $amenityId) {
            $salonAmenities[] = [
                'salon_id' => $salonId,
                'amenity_id' => $amenityId
            ];
        }
        foreach ($salonAmenities as $data) {
            SalonAmenity::create($data);
        }
        return ["success" => "Salon amenities created successfully"];
    }


    // PUT
    // No update method as this is just a pivot table

    //DELETE method
    public function delete(SalonAmenity $businessAmenity)
    {
        $result = $businessAmenity->delete();

        return ["success" => $result];
    }
}
